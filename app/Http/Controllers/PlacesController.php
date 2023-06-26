<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class PlacesController extends Controller
{
    public function findNearestPsychiatrists(Request $request)
    {
        // Get the latitude and longitude of the location
        $latitude = $request->input('latitude');
        $longitude = $request->input('longitude');

        // Make a request to the Google Places API
        $client = new Client();
        $response = $client->get('https://maps.googleapis.com/maps/api/place/nearbysearch/json', [
            'query' => [
                'location' => $latitude . ',' . $longitude,
                'radius' => 5000, // Search radius in meters
                'keyword' => 'psychiatrist',
                'key' => config('app.google_places_api_key'),
            ],
        ]);

        // Parse the response
        $places = json_decode($response->getBody(), true)['results'];

        // Return the places as JSON or process them as needed
        return response()->json($places);
    }
}