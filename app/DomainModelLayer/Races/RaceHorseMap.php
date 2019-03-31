<?php

namespace App\DomainModelLayer\Races;

use Analogue\ORM\EntityMap;


class RaceHorseMap extends EntityMap
{

    protected $table = 'race_horses';
    public $timestamps = true;


    public function race(RaceHorse $raceHorse)
    {
        return $this->belongsTo($raceHorse, Race::class, 'race_id', 'id');
    }

    public function horse(RaceHorse $raceHorse)
    {
        return $this->belongsTo($raceHorse, Horse::class, 'horse_id', 'id');
    }
}