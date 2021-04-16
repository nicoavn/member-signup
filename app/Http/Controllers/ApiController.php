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
        $driver->first_name = $request->input('validationFirstname');
        $driver->last_name = $request->input('validationLastname');
        $driver->social_security_no = $request->input('validationSocialSecurity');
        $driver->desired_number = $request->input('validationNumber');
        $driver->agreed_accept_terms =
            Carbon::parse($request->input('agreed_accept_terms')) ?: Carbon::now();
        $driver->contact_phone = $request->input('validationPhone');
        $driver->contact_email = $request->input('contact_email', '');
        $driver->emergency_contact_name = $request->input('validationName', '');
        $driver->emergency_contact_phone = $request->input('validationEmergencyPhone', '');
        $driver->save();

        $driverDocument = new DriverDocument;
        $driverDocument->dmv_license = $request->input('validationDMV');
        $driverDocument->tlc_license = $request->input('validationTLC');
        $driverDocument->tlc_expiration_date = Carbon::parse($request->input('validationExpiration'));
        $driverDocument->driver()->associate($driver);
        $driverDocument->save();

        $address = new Address;
        $address->street_address = $request->input('validationAddress');
        $address->apt_unit = $request->input('validationAppartment');
        $address->city = $request->input('validationCity');
        $address->state = $request->input('validationState');
        $address->zip_code = $request->input('validationZip');
        $address->driver()->associate($driver);
        $address->save();

        $vehicle = new Vehicle;
        $vehicle->make = $request->input('validationSelectMaker');
        $vehicle->model = $request->input('validationSelectModel');
        $vehicle->color = $request->input('validationSelectColor');
        $vehicle->year = $request->input('validationSelectYear');
        $vehicle->plate_number = $request->input('plate_number', '');
        $vehicle->vin = $request->input('validationVin');
        $vehicle->diamond = $request->input('validationDIAMOND');
        $vehicle->base_number_name = $request->input('base_number_name', '');
        $vehicle->tablet_no = $request->input('tablet_no', '');
        $vehicle->insurance_certificate_provided = $request->input('insurance_certificate_provided', false);
        $vehicle->nys_registration = $request->input('nys_registration', false);
        $vehicle->driver()->associate($driver);
        $vehicle->save();

        return new JsonResponse($address);
    }
}
