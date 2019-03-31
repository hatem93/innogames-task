<?php

namespace App\Http\Controllers\Races;

use App\ApplicationLayer\Races\RaceMainService;
use App\Http\Controllers\Controller;
use App\Infrastructure\Races\RaceMainRepository;
use App\Helpers\Mapper;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Helpers\ResponseObject;


class RacesController extends Controller
{

    private $raceService;

    public function __construct(){
    	$this->raceService = new RaceMainService(new RaceMainRepository());
    }


    public function createRace(){
        $response = $this->raceService->createRace();
        return $this->handleResponse($response);
    }

    public function progressRace(Request $request){

    }

    public function getLastFiveCompletedRaces(){
        $response = $this->raceService->getLastFiveCompletedRaces();
        return $this->handleResponse($response);
    }

    public function advanceRacesByTenSec(){
        $response = $this->raceService->advanceRacesByTenSec();
        return $this->handleResponse($response);
    }

    public function index(){
        $nonFinishedRaces = $this->raceService->getNonFinishedRaces();
        $top5Races = $this->raceService->getLastFiveCompletedRaces();
        $topHorse = $this->raceService->getTopHorse();
        return view('horse',compact('nonFinishedRaces','top5Races','topHorse'));
    }


}