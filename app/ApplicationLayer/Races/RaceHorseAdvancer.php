<?php

namespace App\ApplicationLayer\Races;

use App\DomainModelLayer\Races\RaceHorse;

class RaceHorseAdvancer {
    private $raceHorse;
    private $advanceBy;
    public function __construct(RaceHorse $raceHorse,$advanceBy = 10){
        $this->raceHorse = $raceHorse;
        $this->advanceBy = $advanceBy;
    }

    public function advanceHorse(){
        //check if the horse can advance
        if(($this->raceHorse->getCoveredDistance() != $this->raceHorse->getRace()->getLength()) ||
        $this->raceHorse->getHorse()->getSpeedBasedOnDistance($this->raceHorse->getCoveredDistance())){
            $distanceForJockey = $this->raceHorse->getHorse()->getDistanceForJockey();
            $currentDistance = $this->raceHorse->getCoveredDistance();
            $raceDistance = $this->raceHorse->getRace()->getLength();
            $avialableTime = $this->advanceBy;
            $currentSpeed = $this->raceHorse->getHorse()->getSpeedBasedOnDistance($currentDistance);
            //dd($currentDistance. " ".$distanceForJockey);
            if($currentDistance < $distanceForJockey){
                $distanceToCover = $distanceForJockey - $currentDistance;
                $timeTakenToCover = $distanceToCover/$currentSpeed;
                if($timeTakenToCover > $avialableTime){
                    $timeTakenToCover = $avialableTime;
                }
                $coveredDistance = $timeTakenToCover * $currentSpeed;
                $this->raceHorse->setCoveredDistance($currentDistance + $coveredDistance);
                $currentDistance = $this->raceHorse->getCoveredDistance();
                $avialableTime -=  $timeTakenToCover;
            }
            if($avialableTime > 0){
                $currentSpeed = $this->raceHorse->getHorse()->getSpeedBasedOnDistance($currentDistance);

                $distanceToCover = $raceDistance - $currentDistance;
                if($currentSpeed != 0){
                    $timeTakenToCover = $distanceToCover/$currentSpeed;
                    if($timeTakenToCover > $avialableTime){
                        $timeTakenToCover = $avialableTime;
                    }
                    $coveredDistance = $timeTakenToCover * $currentSpeed;
                    //dd($currentSpeed);
                    $this->raceHorse->setCoveredDistance($currentDistance + $coveredDistance);
                    $currentDistance = $this->raceHorse->getCoveredDistance();
                    $avialableTime -=  $timeTakenToCover;
                }
            }
            if($currentDistance == $raceDistance){
                $this->raceHorse->setFinishTime();
            }
        }

        return $this->raceHorse;
    }

}