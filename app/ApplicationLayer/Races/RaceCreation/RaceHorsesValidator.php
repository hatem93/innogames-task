<?php

namespace App\ApplicationLayer\Races\RaceCreation;

use App\DomainModelLayer\Races\Horse;
use App\DomainModelLayer\Races\Race;

class RaceHorsesValidator implements  IRaceHorsesValidator{



    public function validateRaceHorses($horses,Race $race)
    {
        foreach ($horses as $horse){
            if($this->validateHorse($horse,$race)){
                return true;
            }

        }
        return false;
    }

    public function validateHorse(Horse $horse,Race $race){
        $distanceForJockey = $horse->getDistanceForJockey();
        $speedForJockey = $horse->getSpeedBasedOnDistance($distanceForJockey);
        if($speedForJockey <= 0 && $distanceForJockey< $race->getLength()){
            return false;
        }
        return true;
    }
}