<?php

namespace App\Services;

use GuzzleHttp\Client;

class RecetaService {

    protected $client;

    protected $certs;

    public function __construct(){
        $this->client = resolve(Client::class);
        $this->certs = [
            'app_id' => config('app.api_app_id'),
            'app_key' => config('app.api_app_key')
        ];
    }

    public function search($filters){

        $filters = array_merge($filters,$this->certs);

        $response = $this->client->request('get','', [
            'query' => array_filter($filters)
        ]);
        return collect(json_decode((string) $response->getBody(), true));
    }
}