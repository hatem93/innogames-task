<?php

namespace App\ApplicationLayer\Races\RaceCreation;

use App\DomainModelLayer\Races\Horse;

class RaceHorsesCreator implements IRaceHorsesCreator{
    private $horsesInRace;
    public function __construct()
    {
        $this->horsesInRace = 8;
    }

    public function createRaceHorses()
    {
        $horses = array();
        for($i =0;$i<$this->horsesInRace;$i++){
            array_push($horses,new Horse( mt_rand(0,100)/10, mt_rand(0,100)/10, mt_rand(0,100)/10));
        }
        return $horses;
    }

    public function getNoHorsesInRace(){
        return $this->horsesInRace;
    }
}