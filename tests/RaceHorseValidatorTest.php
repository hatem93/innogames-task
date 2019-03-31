<?php


use App\ApplicationLayer\Races\RaceCreation\RaceHorsesValidator;
use App\DomainModelLayer\Races\Race;
use App\DomainModelLayer\Races\RaceHorse;
use App\DomainModelLayer\Races\Horse;

class RaceHorseValidatorTest extends TestCase
{
    public function testValidateHorseFalse(){
        $raceHorseValidator = new RaceHorsesValidator();
        $race = new Race();
        $horse = new Horse(0,0,0);
        $this->assertEquals(false,$raceHorseValidator->validateHorse($horse,$race));
    }
    public function testValidateHorseTrue(){
        $raceHorseValidator = new RaceHorsesValidator();
        $race = new Race();
        $horse = new Horse(0.1,0,0);
        $this->assertEquals(true,$raceHorseValidator->validateHorse($horse,$race));
    }

    public function testValidateRaceHorsesFalse(){
        $raceHorseValidator = new RaceHorsesValidator();
        $race = new Race();
        $horse1 = new Horse(0.0,0,0);
        $horse2 = new Horse(0.0,0,0);
        $raceHorses = array($horse1,$horse2);
        $this->assertEquals(false,$raceHorseValidator->validateRaceHorses($raceHorses,$race));
    }

    public function testValidateRaceHorsesTrue(){
        $raceHorseValidator = new RaceHorsesValidator();
        $race = new Race();
        $horse1 = new Horse(0.0,0,0);
        $horse2 = new Horse(0.1,0,0);
        $raceHorses = array($horse1,$horse2);
        $this->assertEquals(true,$raceHorseValidator->validateRaceHorses($raceHorses,$race));
    }
}