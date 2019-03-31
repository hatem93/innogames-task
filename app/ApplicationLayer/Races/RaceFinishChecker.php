<?php

namespace App\ApplicationLayer\Races;

use App\DomainModelLayer\Races\Race;
use App\DomainModelLayer\Races\RaceHorse;


class RaceFinishChecker {

    private  $race;

    public function __construct(Race $race){
        $this->race = $race;
    }

    public  function check(){
        $raceDistance = $this->race->getLength();
        $raceHorses = $this->race->getRaceHorses();
        foreach ($raceHorses as $raceHorse){
            if($raceHorse->getCoveredDistance() < $raceDistance &&
                $raceHorse->getHorse()->getSpeedBasedOnDistance($raceHorse->getCoveredDistance()) != 0){
                return false;
            }
        }
        return true;
    }

}