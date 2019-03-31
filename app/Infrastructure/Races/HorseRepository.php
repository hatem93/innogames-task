<?php

namespace App\Infrastructure\Races;

use Analogue;
use App\DomainModelLayer\Races\Horse;
use App\DomainModelLayer\Races\HorseMap;

class HorseRepository
{
    public function saveHorse(Horse $horse){
        $horseMapper= Analogue::mapper(Horse::class,HorseMap::class);
        return $horseMapper->store($horse);
    }
}