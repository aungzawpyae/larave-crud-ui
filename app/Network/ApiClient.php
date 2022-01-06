<?php

namespace App\Network;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Response;


class ApiClient
{
    protected $base_url;
    protected $api_key;

    public function __construct()
    {
        $this->base_url = env('API_URL');
        $this->api_key = env('API_KEY');
    }

    public function puller($url,$params)
    {

        $response = Http::withHeaders([
            'X-API-TOKEN' => $this->api_key
        ])->get($this->base_url . '/' . $url, $params);

        if($response->successful())
        {
            return $response->json();
        }

        if($response->failed() || $response->clientError() || $response->serverError())
        {
            return response()->json($response->json(), $response->status());
        }
    }

    public function poster($url,$params)
    {
        $response = Http::withHeaders([
            'X-API-TOKEN' => $this->api_key
        ])->post($this->base_url . '/' . $url, $params);
        if($response->successful())
        {
            return $response->json();
        }

        if($response->failed() || $response->clientError() || $response->serverError())
        {
            return response()->json($response->json(), $response->status());
        }
    }

    public function updater($url,$params)
    {
        $response = Http::withHeaders([
            'X-API-TOKEN' => $this->api_key
        ])->put($this->base_url . '/' . $url, $params);

        if($response->successful())
        {
            return $response->json();
        }

        if($response->failed() || $response->clientError() || $response->serverError())
        {
            return response()->json($response->json(), $response->status());
        }
    }

    public function fileposter($url,$params)
    {
        $response = Http::withHeaders([
            'X-API-TOKEN' => $this->api_key
        ])->attach('attachment', file_get_contents($params), $params)
            ->post($this->base_url . '/' . $url, $params);

        if($response->successful())
        {
            return $response->json();
        }

        if($response->failed() || $response->clientError() || $response->serverError())
        {
            return response()->json($response->json(), $response->status());
        }
    }

}