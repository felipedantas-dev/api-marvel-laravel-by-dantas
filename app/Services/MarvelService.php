<?php

namespace App\Services;

use App\Helpers\MarvelRequest;
use Exception;

class MarvelService extends MarvelRequest
{

    public function getComics ($request)
    {

        $url = $this->getUrl("comics");

        try {

            $request = $this->call($url, "GET", $request["params"] ?? []);

        } catch (Exception $e) {

            throw new Exception($e);
        }

        return $request;
    }

    public function getCharacters ($request)
    {
        
        $url = $this->getUrl("characters");

        try {

            return $this->call($url, "GET", $request["params"] ?? []);

        } catch (Exception $e) {

            throw new Exception($e);
        }

    }

    public function getCharacter ($request)
    {
        
        $url = $this->getUrl("characters/{$request["id"]}");

        try {
            
            return $this->call($url, "GET", $request["params"] ?? []);

        } catch (Exception $e) {

            throw new Exception($e);
        }

    }


}
