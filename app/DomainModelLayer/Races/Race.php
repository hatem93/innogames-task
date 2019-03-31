<?php

namespace App\DomainModelLayer\Races;

use Analogue\ORM\Entity;
use Analogue\ORM\EntityCollection;
use Illuminate\Support\Facades\Event;
use Faker;

class Race extends Entity
{

    public function __construct($length = 1500,$time = 0){
        $this->status = "started";
        $this->length = $length;
        $this->time = $time;
        $this->raceHorses = new EntityCollection;
    }

    public function getId(){
        return $this->id;
    }

    public function getStatus(){
        return $this->status;
    }
    public function setStatus($status){
        $this->status = $status;
    }

    public  function getLength(){
        return $this->length;
    }
    public function getRaceHorses()
    {
        return $this->raceHorses;
    }

    public function addRaceHorse(RaceHorse $raceHorse)
    {
        return $this->raceHorses->push($raceHorse);
    }

    public function removeRaceHorse(RaceHorse $raceHorse)
    {
        return $this->raceHorses->remove($raceHorse);
    }

    public function getTime(){
        return $this->time;
    }

    public function setTime($time){
        $this->time = $time;
    }
}