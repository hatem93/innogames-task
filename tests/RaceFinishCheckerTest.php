<?php

use App\ApplicationLayer\Races\RaceFinishChecker;
use App\DomainModelLayer\Races\Race;
use App\DomainModelLayer\Races\RaceHorse;
use App\DomainModelLayer\Races\Horse;

class RaceFinishCheckerTest extends TestCase
{
    public function testRaceFinishCheckFalse(){
        $race = new Race();
        $horse = new Horse(10,10,10);
        $raceHorse = new RaceHorse($race,$horse);
        $raceHorse->setCoveredDistance($race->getLength() -1);
        $race->addRaceHorse($raceHorse);
        $raceFinishChecker = new RaceFinishChecker($race);
        $this->assertEquals(false,$raceFinishChecker->check());
    }

    public function testRaceFinishCheckTrue(){
        $race = new Race();
        $horse = new Horse(10,10,10);
        $raceHorse = new RaceHorse($race,$horse);
        $raceHorse->setCoveredDistance($race->getLength());
        $race->addRaceHorse($raceHorse);
        $raceFinishChecker = new RaceFinishChecker($race);
        $this->assertEquals(true,$raceFinishChecker->check());
    }
}