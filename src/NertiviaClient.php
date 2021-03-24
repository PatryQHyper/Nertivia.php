<?php

namespace PatryQHyper\Nertivia;

use GuzzleHttp\Client;

class NertiviaClient extends Messages {
    protected $hauthId;
    protected $apiUrl;

    public function __construct($hauthId, $beta=false)
    {
        $this->hauthId = $hauthId;
        $this->apiUrl = $beta ? 'https://beta.nertivia.net/api' : 'https://nertivia.net/api';
    }

    protected function request($url, $method='GET', $data =[])
    {
        $method = strtoupper($method);

        $client = new Client();

        if(!isset($data['headers'])) $data['headers'] = [
            'Authorization'=>$this->hauthId,
            'Content-type'=>'application/json',
            'Accept'=>'application/json'
        ];
        $request = $client->request($method, $this->apiUrl.$url, $data);

        if($request->getStatusCode() != 200)
        {
            throw new Exception('invalid API response: '.$request, $request->getStatusCode());
        }

        return $request;
    }
}