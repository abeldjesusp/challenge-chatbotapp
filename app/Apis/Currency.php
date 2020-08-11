<?php

namespace App\Apis;

use GuzzleHttp\Client;

class Currency
{
    protected $baseUrl;
    protected $apiKey;

    public function __construct() {
        $this->baseUrl = env('CURRENCY_API_ENDPOINT');
        $this->apiKey = env('CURRENCY_API_KEY');
    }

    public function convertFromTo($from, $to, $amount) {
        $url = $this->baseUrl.'?api_key='.$this->apiKey.'&from='.$from.'&to='.$to.'&amount='.$amount;
        $client = new Client(['base_uri' => $url]);
        $response = $client->request('GET');
        $data = json_decode($response->getBody());
        
        return $data;
    }
}

?>