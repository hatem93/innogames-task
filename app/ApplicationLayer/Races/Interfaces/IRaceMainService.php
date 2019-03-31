<?php

namespace App\ApplicationLayer\Races\Interfaces;

interface IRaceMainService
{
    public function createRace();
    public function getLastFiveCompletedRaces();
    public function advanceRacesByTenSec();
    public function getNonFinishedRaces();
    public function getTopHorse();
}


