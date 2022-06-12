<?php

namespace App\Helpers;

abstract class MarvelRequest
{

    const URL_BASE = "https://gateway.marvel.com/v1/public";

    public function __construct()
    {
        $this->client =  new \GuzzleHttp\Client();
    }


    private function getClientKeys()
    {
        $timestamp = time();
        
        return
            [
                'apikey' => env("MARVEL_PUBLIC_KEY"),
                'ts' => $timestamp,
                'hash' => md5($timestamp . env("MARVEL_PRIVATE_KEY") . env("MARVEL_PUBLIC_KEY"))
            ];
    }

    public function getUrl($end_point)
    {
        return self::URL_BASE . (substr($end_point, 0, 1) == '/'
            ? $end_point
            : '/' . $end_point);
    }

    /**
     * Getter the headers to access
     *
     * @return array
     */
    public function getHeaders()
    {
        return [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json'
        ];
    }

    protected function call($url, $type, array $params = [], $headers = null)
    {

        $response = $this->client->request(
            $type,
            $url .'?' . http_build_query(array_merge($params, $this->getClientKeys())),
            [
                'headers' => is_null($headers) ? $this->getHeaders() : $headers
            ]
        );

        return json_decode((string) $response->getBody());
    }
}
