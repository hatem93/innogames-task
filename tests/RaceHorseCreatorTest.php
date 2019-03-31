<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\ApplicationLayer\Races\RaceCreation\RaceHorsesCreator;

class RaceHorseCreatorTest extends TestCase
{
    public function testRaceHorseCreator(){
        $raceHorseCreator = new RaceHorsesCreator();
        $raceHorses = $raceHorseCreator->createRaceHorses();
        $this->assertEquals($raceHorseCreator->getNoHorsesInRace(),count($raceHorses));
    }
}