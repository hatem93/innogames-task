<?php

namespace App\DomainModelLayer\Races;

use Analogue\ORM\EntityMap;

class HorseMap extends EntityMap
{

    protected $table = 'horse';
    public $timestamps = true;
}