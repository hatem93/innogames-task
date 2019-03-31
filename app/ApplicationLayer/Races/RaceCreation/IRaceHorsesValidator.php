<?php

namespace App\ApplicationLayer\Races\RaceCreation;

use App\DomainModelLayer\Races\Race;

interface IRaceHorsesValidator{
    public function validateRaceHorses($horses,Race $race);
}