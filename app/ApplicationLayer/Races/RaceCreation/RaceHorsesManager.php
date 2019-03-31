<?php

namespace App\ApplicationLayer\Races\RaceCreation;

use App\DomainModelLayer\Races\Race;

class RaceHorsesManager{

    private $raceHorsesCreator;
    private $raceHorsesValidator;
    public function __construct(IRaceHorsesCreator $raceHorsesCreator,IRaceHorsesValidator $raceHorsesValidator)
    {
        $this->raceHorsesCreator = $raceHorsesCreator;
        $this->raceHorsesValidator = $raceHorsesValidator;
    }

    public function createAndValidateRaceHorses(Race $race){
        $horses = $this->raceHorsesCreator->createRaceHorses();
        if(!$this->raceHorsesValidator->validateRaceHorses($horses,$race)){
            return false;
        }
        return $horses;
    }
}