<?php

namespace App\ApplicationLayer\Races;

use App\ApplicationLayer\Races\Dtos\HorseDto;
use App\ApplicationLayer\Races\Dtos\MiniRaceDto;
use App\ApplicationLayer\Races\Dtos\RaceHorseDto;
use App\ApplicationLayer\Races\Dtos\TopHorseDto;
use App\ApplicationLayer\Races\RaceCreation\RaceHorsesCreator;
use App\ApplicationLayer\Races\RaceCreation\RaceHorsesManager;
use App\ApplicationLayer\Races\RaceCreation\RaceHorsesValidator;
use App\DomainModelLayer\Races\Race;
use App\DomainModelLayer\Races\RaceHorse;
use App\DomainModelLayer\Races\Repositories\IRaceMainRepository;
use App\Exceptions\BadRequestException;
use App\Helpers\Mapper;

class RaceService
{

    private $raceRepository;

    public function __construct(IRaceMainRepository $raceRepository)
    {
        $this->raceRepository = $raceRepository;
    }

    public function createRace(){
        $nonFinishedRaces = $this->raceRepository->getNonFinishedRaces();
        if(count($nonFinishedRaces) >= 3){
            throw new BadRequestException("You can't create more races when there are three running");
        }

        $race = new Race();
        $horsesManager = new RaceHorsesManager(new RaceHorsesCreator(),new RaceHorsesValidator());
        $horses = $horsesManager->createAndValidateRaceHorses($race);

        while(!$horses){
            $horses = $horsesManager->createAndValidateRaceHorses($race);
        }

        $this->saveRaceAndHorses($race,$horses);
        $raceDto = Mapper::MapEntity(MiniRaceDto::class,$race);
        $horsesDtos = Mapper::MapEntityCollection(HorseDto::class,$horses);
        return ["race"=>$raceDto,"horses"=>$horsesDtos];

    }

    public function saveRaceAndHorses(Race $race,$horses){
        $this->raceRepository->beginTransaction();
        $this->raceRepository->saveRace($race);
        foreach ($horses as $horse){
            $this->raceRepository->saveHorse($horse);
            $raceHorse = new RaceHorse($race,$horse);
            $this->raceRepository->saveRaceHorse($raceHorse);
        }
        $this->raceRepository->commitTransaction();
    }

    public function getLastFiveCompletedRaces(){
        $races = $this->raceRepository->getLastFinishedRaces(5);
        $returnArray = array();
        foreach ($races as $race){
            $raceHorses = $this->raceRepository->getTopPositions($race,3);
            $horsesData = array();
            foreach ($raceHorses as $raceHorse){
                array_push($horsesData,array("name"=>$raceHorse->getHorse()->getName()
                ,"time"=>$raceHorse->getFinishTime()));
            }
            array_push($returnArray,array("race"=>$race,"horses"=>$horsesData));
        }
        return $returnArray;
    }

    public function advanceRacesByTenSec()
    {
        $nonFinishedRaces = $this->raceRepository->getNonFinishedRaces();
        if (count($nonFinishedRaces) == 0) {
            throw new BadRequestException("There is no races to advance");
        }

        $this->raceRepository->beginTransaction();
        foreach ($nonFinishedRaces as $nonFinishedRace) {
            $raceHorses = $nonFinishedRace->getRaceHorses();
            foreach ($raceHorses as $raceHorse) {
                $raceHorseAdvancer = new RaceHorseAdvancer($raceHorse);
                $this->raceRepository->saveRaceHorse($raceHorseAdvancer->advanceHorse());
            }
            $raceFinishChecker = new RaceFinishChecker($nonFinishedRace);
            if ($raceFinishChecker->check()) {
                $nonFinishedRace->setStatus("finished");
            }
            $nonFinishedRace->setTime($nonFinishedRace->getTime() + 10);
            $this->raceRepository->saveRace($nonFinishedRace);
        }
        $this->raceRepository->commitTransaction();

        return "advanced Successfully";
    }

    public function getNonFinishedRaces(){
        $nonFinishedRaces = $this->raceRepository->getNonFinishedRaces();
        $races = array();
        foreach ($nonFinishedRaces as $nonFinishedRace){
            $raceDto = Mapper::MapEntity(MiniRaceDto::class,$nonFinishedRace);
            $raceHorses = $this->raceRepository->getRaceHorsesOrdered($nonFinishedRace);
            $raceHorsesDtos = array();
            $counter = 1;
            foreach ($raceHorses as $raceHorse){
                $raceHorseDto = new RaceHorseDto();
                $raceHorseDto->name = $raceHorse->getHorse()->getName();
                $raceHorseDto->distanceCovered = $raceHorse->getCoveredDistance();
                $raceHorseDto->position = $counter;
                $raceHorseDto->percentage = ($raceHorse->getCoveredDistance()/$raceHorse->getRace()->getLength())*100;
                $raceHorseDto->time = $raceHorse->getRace()->getTime();
                if($raceHorse->getFinishTime() != null){
                    $raceHorseDto->time = $raceHorse->getFinishTime();
                }
                array_push($raceHorsesDtos,$raceHorseDto);
                $counter++;
            }
            array_push($races,array('race'=>$raceDto,'horses'=>$raceHorsesDtos));
        }
        return $races;
    }


    public function getTopHorse(){
        $topRaceHorse = $this->raceRepository->getTopRaceHorse();
        if($topRaceHorse == null){
            return "No horse have finished a race yet!";
        }
        $topHorseDto = new TopHorseDto();
        $topHorseDto->name = $topRaceHorse->getHorse()->getName();
        $topHorseDto->endurance = $topRaceHorse->getHorse()->getEndurance();
        $topHorseDto->strength = $topRaceHorse->getHorse()->getStrength();
        $topHorseDto->speed = $topRaceHorse->getHorse()->getSpeed() - $topRaceHorse->getHorse()->getBaseSpeed();
        $topHorseDto->time = $topRaceHorse->getFinishTime();
        return $topHorseDto;
    }

}