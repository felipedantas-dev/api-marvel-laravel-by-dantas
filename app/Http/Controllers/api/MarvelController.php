<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Services\MarvelService;
use Exception;
use Illuminate\Http\Request;

class MarvelController extends Controller
{

    public function __construct (MarvelService $marvel_service)
    {
        $this->marvel_service = $marvel_service;
    }

    public function comics(Request $request)
    {

        try {

            $comics = $this->marvel_service->getComics($request->input());

            return response()->json(["data" => $comics], 200);
        
        } catch (Exception $e) {

            return response()->json(['error' => $e->getMessage()], 400);

        }
    }

    public function characters(Request $request)
    {

        try {

            $characters = $this->marvel_service->getCharacters($request->input());

            return response()->json(["data" => $characters], 200);
        
        } catch (Exception $e) {

            return response()->json(['error' => $e->getMessage()], 400);

        }
    }

    public function character(Request $request)
    {

        try {

            $character = $this->marvel_service->getCharacter($request->input());

            return response()->json(["data" => $character], 200);
        
        } catch (Exception $e) {

            return response()->json(['error' => $e->getMessage()], 400);

        }
    }

}
