<?php

namespace App\ApplicationLayer\Races;

use App\ApplicationLayer\Races\Interfaces\IRaceMainService;;
use App\DomainModelLayer\Races\Repositories\IRaceMainRepository;


class RaceMainService implements IRaceMainService
{
	private $raceRepository;

    public function __construct(IRaceMainRepository $raceRepository){
        $this->raceRepository = $raceRepository;
    }

    public function createRace(){
        $raceService = new RaceService($this->raceRepository);
        return $raceService->createRace();
    }

    public function getLastFiveCompletedRaces(){
        $raceService = new RaceService($this->raceRepository);
        return $raceService->getLastFiveCompletedRaces();
    }

    public function advanceRacesByTenSec(){
        $raceService = new RaceService($this->raceRepository);
        return $raceService->advanceRacesByTenSec();
    }
    public function getNonFinishedRaces(){
        $raceService = new RaceService($this->raceRepository);
        return $raceService->getNonFinishedRaces();
    }

    public function getTopHorse(){
        $raceService = new RaceService($this->raceRepository);
        return $raceService->getTopHorse();
    }

}