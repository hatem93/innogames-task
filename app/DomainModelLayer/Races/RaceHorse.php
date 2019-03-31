<?php
namespace App\DomainModelLayer\Races;

use Analogue\ORM\Entity;
use Analogue\ORM\EntityCollection;

class RaceHorse extends Entity
{

    public function __construct(Race $race,Horse $horse)
    {
        $this->race = $race;
        $this->horse = $horse;
        $this->covered_distance = 0;
    }

    public function getRace(){
        return $this->race;
    }

    public function getHorse(){
        return $this->horse;
    }

    public function setRace(Race $race){
        return $this->race = $race;
    }

    public function setHorse(Horse $horse){
        return $this->horse = $horse;
    }

    public function getCoveredDistance(){
        return $this->covered_distance;
    }

    public function setCoveredDistance($distance){
        return $this->covered_distance = $distance;
    }

    public function getFinishTime(){
        return $this->finish_time;
    }

    public function setFinishTime(){
        $raceDistance = $this->getRace()->getLength();
        $distanceForJockey = $this->getHorse()->getDistanceForJockey();
        $speedBeforeJockey = $this->getHorse()->getSpeedBasedOnDistance($distanceForJockey -1);
        $speedAfterJockey = $this->getHorse()->getSpeedBasedOnDistance($distanceForJockey );
        $this->finish_time = ($distanceForJockey/$speedBeforeJockey) +(($raceDistance-$distanceForJockey)/$speedAfterJockey);
    }




}