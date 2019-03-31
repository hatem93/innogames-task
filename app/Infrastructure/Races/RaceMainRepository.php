<?php

namespace App\Infrastructure\Races;

use Analogue;
use App\DomainModelLayer\Races\Horse;
use App\DomainModelLayer\Races\Race;
use App\DomainModelLayer\Races\RaceHorse;
use App\DomainModelLayer\Races\Repositories\IRaceMainRepository;

class RaceMainRepository implements IRaceMainRepository
{
    public function saveRace(Race $race){
        $raceRepository = new RaceRepository();
        return $raceRepository->saveRace($race);
    }
    public function saveRaceHorse(RaceHorse $raceHorse){
        $raceRepository = new RaceRepository();
        return $raceRepository->saveRaceHorse($raceHorse);
    }
    public function saveHorse(Horse $horse){
        $horseRepository = new HorseRepository();
        return $horseRepository->saveHorse($horse);
    }

    public function getNonFinishedRaces()
    {
        $raceRepository = new RaceRepository();
        return $raceRepository->getNonFinishedRaces();
    }

    public function beginTransaction()
    {
        $raceRepository = new RaceRepository();
        $raceRepository->beginTransaction();
    }

    public function commitTransaction()
    {
        $raceRepository = new RaceRepository();
        $raceRepository->commitTransaction();
    }

    public function getLastFinishedRaces($number = 5){
        $raceRepository = new RaceRepository();
        return $raceRepository->getLastFinishedRaces($number);
    }
    public function getTopPositions(Race $race,$number = 3){
        $raceRepository = new RaceRepository();
        return $raceRepository->getTopPositions($race,$number);
    }

    public function getRaceHorsesOrdered(Race $race){
        $raceRepository = new RaceRepository();
        return $raceRepository->getRaceHorsesOrdered($race);
    }

    public function getTopRaceHorse(){
        $raceRepository = new RaceRepository();
        return $raceRepository->getTopRaceHorse();
    }
}