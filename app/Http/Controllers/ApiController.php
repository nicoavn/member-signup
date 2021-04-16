<?php

namespace App\Http\Controllers;

use App\Http\Resources\MakesResource;
use App\Http\Resources\ModelsResource;
use App\Models\Address;
use App\Models\Driver;
use App\Models\DriverDocument;
use App\Models\Vehicle;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public const VEHICLE_API_URL = 'https://www.fueleconomy.gov/ws/rest/vehicle/menu';

    public function vehicleMakes($year = null): MakesResource
    {
        if (!$year) {
            $year = date("Y");
        }

        $cacheKey = "vehicle_makes_$year";

        $makes = Cache::remember($cacheKey, 60 * 60 * 24 * 30, function () use ($year) {
            $req = Http::get(self::VEHICLE_API_URL . '/make?year=' . $year);
            $makes = simplexml_load_string($req->body());
            $makeList = [];
            foreach($makes->menuItem as $c) {
                $makeList[] = (string) $c->value;
            }
            return collect($makeList);
        });

        return new MakesResource($makes);
    }

    public function vehicleModels($make, $year = null): ModelsResource
    {
        if (!$year) {
            $year = date("Y");
        }

        $cacheKey = "vehicle_models_$make\_$year";

        $models = Cache::rememberForever($cacheKey, function () use ($make, $year) {
            $req = Http::get(self::VEHICLE_API_URL . '/model?make=' . $make . '&year=' . $year);
            $models = simplexml_load_string($req->body());
            $modelList = [];
            foreach($models->menuItem as $c) {
                $modelList[] = (string) $c->value;
            }
            return collect($modelList);
        });

        return new ModelsResource($models);
    }

    public function signUp(Request $request)
    {
        $driver = new Driver;
        $driver->first_name = $request->input('First-Name');
        $driver->last_name = $request->input('Last-Name');
        $driver->social_security_no = $request->input('Social-Security');
        $driver->desired_number = $request->input('Desired-Number');
        $driver->agreed_accept_terms =
            Carbon::parse($request->input('agreed_accept_terms')) ?: Carbon::now();
        $driver->contact_phone = $request->input('Contact-Phone');
        $driver->contact_email = $request->input('Contact-Email', '');
        $driver->emergency_contact_name = $request->input('Emergency-Contact-Name', '');
        $driver->emergency_contact_phone = $request->input('Emergency-Phone', '');
        $driver->save();

        $driverDocument = new DriverDocument;
        $driverDocument->dmv_license = $request->input('DMV');
        $driverDocument->tlc_license = $request->input('TLC');
        $driverDocument->tlc_expiration_date = Carbon::parse($request->input('TLC-Expiration'));
        $driverDocument->driver()->associate($driver);
        $driverDocument->save();

        $address = new Address;
        $address->street_address = $request->input('Street-Address');
        $address->apt_unit = $request->input('Apartment');
        $address->city = $request->input('City');
        $address->state = $request->input('State');
        $address->zip_code = $request->input('Zip-Code');
        $address->driver()->associate($driver);
        $address->save();

        $vehicle = new Vehicle;
        $vehicle->make = $request->input('Car-Maker');
        $vehicle->model = $request->input('Car-Model');
        $vehicle->color = $request->input('Car-Color');
        $vehicle->year = $request->input('Car-Year');
        $vehicle->plate_number = $request->input('plate-number', '');
        $vehicle->vin = $request->input('Vin');
        $vehicle->diamond = $request->input('Diamond');
        $vehicle->base_number_name = $request->input('Base-number', '');
        $vehicle->tablet_no = $request->input('Tablet-number', '');
        $vehicle->insurance_certificate_provided = $request->input('insurance_certificate_provided', false);
        $vehicle->nys_registration = $request->input('nys_registration', false);
        $vehicle->driver()->associate($driver);
        $vehicle->save();

        return new JsonResponse($address);
    }
}
