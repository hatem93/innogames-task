<?php

namespace App\DomainModelLayer\Races;

use Analogue\ORM\EntityMap;
use App\DomainModelLayer\Races\Race;
use App\DomainModelLayer\Races\RaceHorse;

class RaceMap extends EntityMap {

    protected $table = 'race';
    public $timestamps = true;

    public function raceHorses(Race $race)
    {
        return $this->hasMany($race, RaceHorse::class, 'race_id', 'id');
    }

}