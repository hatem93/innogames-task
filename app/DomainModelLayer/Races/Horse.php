<?php

namespace App\DomainModelLayer\Races;

use Analogue\ORM\Entity;
use Analogue\ORM\EntityCollection;
use Illuminate\Support\Facades\Event;
use Faker;

class Horse extends Entity
{
    private $baseSpeed = 5;
    private $baseReduction = 5;
    private $basePercentReduction = 0.08;
    private $baseDistanceJockey = 100;

    public function __construct($speed,$strength,$endurance)
    {
        $faker = Faker\Factory::create();
        $this->name = $faker->firstname;
        $this->speed = $speed;
        $this->strength = $strength;
        $this->endurance = $endurance;
    }

    public function getBaseSpeed(){
        return $this->baseSpeed;
    }

    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getSpeed(){
        return $this->speed + $this->baseSpeed;
    }

    public function setSpeed($speed){
        $this->speed = $speed;
    }

    public function getStrength(){
        return $this->strength;
    }

    public function setStrength($strength){
        $this->strength = $strength;
    }

    public function getEndurance(){
        return $this->endurance;
    }

    public function setEndurance($endurance){
        $this->endurance = $endurance;
    }

    public function getDistanceForJockey(){
        return $this->endurance * $this->baseDistanceJockey;
    }
    public function getSpeedBasedOnDistance($distance){

        if($distance >= $this->getDistanceForJockey()){
            return $this->baseSpeed + $this->speed -
                ( $this->baseReduction - ($this->basePercentReduction*$this->strength*$this->baseReduction));
        }
        else{
            return $this->baseSpeed + $this->speed;
        }
    }
}