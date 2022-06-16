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

            return $this->call($url, "GET", $request["params"] ?? []);

        } catch (Exception $e) {

            throw new Exception($e);
        }
    }

    public function getEvents ($request)
    {

        $url = $this->getUrl("events");

        try {

            return $this->call($url, "GET", $request["params"] ?? []);

        } catch (Exception $e) {

            throw new Exception($e);
        }
    }

    public function getStories ($request)
    {

        $url = $this->getUrl("stories");

        try {

            return $this->call($url, "GET", $request["params"] ?? []);

        } catch (Exception $e) {

            throw new Exception($e);
        }
    }

    public function getSeries ($request)
    {

        $url = $this->getUrl("series");

        try {

            return $this->call($url, "GET", $request["params"] ?? []);

        } catch (Exception $e) {

            throw new Exception($e);
        }
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

    public function getCharacterComics ($request, $id)
    {
        
        $url = $this->getUrl("characters/{$id}/comics");

        try {
            
            return $this->call($url, "GET", $request["params"] ?? []);

        } catch (Exception $e) {

            throw new Exception($e);
        }
    }

    public function getCharacterEvents ($request, $id)
    {
        
        $url = $this->getUrl("characters/{$id}/events");

        try {
            
            return $this->call($url, "GET", $request["params"] ?? []);

        } catch (Exception $e) {

            throw new Exception($e);
        }
    }

    public function getCharacterStories ($request, $id)
    {
        
        $url = $this->getUrl("characters/{$id}/stories");

        try {
            
            return $this->call($url, "GET", $request["params"] ?? []);

        } catch (Exception $e) {

            throw new Exception($e);
        }
    }

    public function getCharacterSeries ($request, $id)
    {
        
        $url = $this->getUrl("characters/{$id}/series");

        try {
            
            return $this->call($url, "GET", $request["params"] ?? []);

        } catch (Exception $e) {

            throw new Exception($e);
        }
    }
}
