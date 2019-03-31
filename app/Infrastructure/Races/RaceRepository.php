<?php

namespace App\Infrastructure\Races;

use Analogue;
use App\DomainModelLayer\Races\RaceHorseMap;
use App\DomainModelLayer\Races\Race;
use App\DomainModelLayer\Races\RaceHorse;
use App\DomainModelLayer\Races\RaceMap;
use Illuminate\Support\Facades\DB;

class RaceRepository
{
    public function saveRace(Race $race){
        $raceMapper= Analogue::mapper(Race::class,RaceMap::class);
        return $raceMapper->store($race);
    }
    public function saveRaceHorse(RaceHorse $raceHorse){
        $raceHorseMapper = Analogue::mapper(RaceHorse::class,RaceHorseMap::class);
        return $raceHorseMapper->store($raceHorse);
    }

    public function getNonFinishedRaces(){
        $raceMapper= Analogue::mapper(Race::class,RaceMap::class);
        return $raceMapper->query()->where('status','started')->get();
    }
    public function beginTransaction(){
        DB::beginTransaction();
    }
    public function commitTransaction(){
        DB::commit();
    }

    public function getLastFinishedRaces($number = 5){
        $raceMapper= Analogue::mapper(Race::class,RaceMap::class);
        return $raceMapper->query()->where('status','finished')->orderBy('created_at','desc')->limit($number)->get();
    }

    public function getTopPositions(Race $race,$number = 3){
        $raceHorseMapper = Analogue::mapper(RaceHorse::class,Race::class);
        return $raceHorseMapper->query()->where('race_id',$race->getId())
                ->where('covered_distance',$race->getLength())
                ->orderBy('finish_time','asc')->limit($number)->get();
    }

    public function getRaceHorsesOrdered(Race $race){
        $raceHorseMapper = Analogue::mapper(RaceHorse::class,Race::class);
        return $raceHorseMapper->query()->where('race_id',$race->getId())
            ->orderBy('covered_distance','desc')
            ->orderBy('finish_time','asc')->get();
    }

    public function getTopRaceHorse(){
        $raceHorseMapper = Analogue::mapper(RaceHorse::class,Race::class);
        return $raceHorseMapper->query()
            ->whereNotNull('finish_time')
            ->orderBy('finish_time','asc')->first();
    }
}