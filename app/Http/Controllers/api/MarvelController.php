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

            return response()->json(["data" => $comics->data->results], 200);
        
        } catch (Exception $e) {

            return response()->json(['error' => $e->getMessage()], 400);

        }
    }


    public function events(Request $request)
    {

        try {

            $events = $this->marvel_service->getEvents($request->input());

            return response()->json(["data" => $events->data->results], 200);
        
        } catch (Exception $e) {

            return response()->json(['error' => $e->getMessage()], 400);

        }
    }


    public function stories(Request $request)
    {

        try {

            $stories = $this->marvel_service->getStories($request->input());

            return response()->json(["data" => $stories->data->results], 200);
        
        } catch (Exception $e) {

            return response()->json(['error' => $e->getMessage()], 400);

        }
    }


    public function series(Request $request)
    {

        try {

            $series = $this->marvel_service->getSeries($request->input());

            return response()->json(["data" => $series->data->results], 200);
        
        } catch (Exception $e) {

            return response()->json(['error' => $e->getMessage()], 400);

        }
    }
    

    public function characters(Request $request)
    {

        try {

            $characters = $this->marvel_service->getCharacters($request->input());

            return response()->json(["data" => $characters->data->results], 200);
        
        } catch (Exception $e) {

            return response()->json(['error' => $e->getMessage()], 400);

        }
    }

    
    public function character(Request $request)
    {

        try {

            $character = $this->marvel_service->getCharacter($request->input());

            return response()->json(["data" => $character->data->results], 200);
        
        } catch (Exception $e) {

            return response()->json(['error' => $e->getMessage()], 400);

        }
    }


    public function characterComics(Request $request, $id)
    {

        try {

            $comics = $this->marvel_service->getCharacterComics($request->input(), $id);
            return response()->json(["data" => $comics->data->results], 200);

        } catch (Exception $e) {

            return response()->json(['error' => $e->getMessage()], 400);
        }
    }


    public function characterEvents(Request $request, $id)
    {
        
        try {

            $events = $this->marvel_service->getCharacterEvents($request->input(), $id);
            return response()->json(["data" => $events->data->results], 200);

        } catch (Exception $e) {

            return response()->json(['error' => $e->getMessage()], 400);
        }
    }


    public function characterStories(Request $request, $id)
    {
        
        try {

            $stories = $this->marvel_service->getCharacterStories($request->input(), $id);
            return response()->json(["data" => $stories->data->results], 200);

        } catch (Exception $e) {

            return response()->json(['error' => $e->getMessage()], 400);
        }
    }


    public function characterSeries(Request $request, $id)
    {
        
        try {

            $series = $this->marvel_service->getCharacterSeries($request->input(), $id);
            return response()->json(["data" => $series->data->results], 200);

        } catch (Exception $e) {

            return response()->json(['error' => $e->getMessage()], 400);
        }
    }
}
