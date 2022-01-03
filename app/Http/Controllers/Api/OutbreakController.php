<?php

namespace App\Http\Controllers\Api;

use App\Models\Outbreak;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Outbreak as OutbreakResource;

class OutbreakController extends Controller
{
    /**
     * Get Outbreak listing on Leaflet JS geoJSON data structure.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $outbreaks = Outbreak::all();

        $geoJSONdata = $outbreaks->map(function ($outbreak) {
            return [
                'type'       => 'Feature',
                'properties' => new OutbreakResource($outbreak),
                'geometry'   => [
                    'type'        => 'Point',
                    'coordinates' => [
                        $outbreak->longitude,
                        $outbreak->latitude,
                    ],
                ],
            ];
        });

        return response()->json([
            'type'     => 'FeatureCollection',
            'features' => $geoJSONdata,
        ]);
    }
}