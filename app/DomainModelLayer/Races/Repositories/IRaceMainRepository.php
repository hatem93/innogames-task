<?php

namespace App\DomainModelLayer\Races\Repositories;

use App\DomainModelLayer\Races\Horse;
use App\DomainModelLayer\Races\Race;
use App\DomainModelLayer\Races\RaceHorse;

interface IRaceMainRepository
{
    public function saveRace(Race $race);
    public function saveRaceHorse(RaceHorse $raceHorse);
    public function saveHorse(Horse $horse);
    public function getNonFinishedRaces();
    public function beginTransaction();
    public function commitTransaction();
    public function getLastFinishedRaces($number = 5);
    public function getTopPositions(Race $race,$number = 3);
    public function getRaceHorsesOrdered(Race $race);
    public function getTopRaceHorse();
}