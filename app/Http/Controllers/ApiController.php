<?php

namespace App\Http\Controllers;

use App\Http\Resources\MakesResource;
use App\Http\Resources\ModelsResource;
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

        $cacheKey = "vehicle_models_$year";

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
}
