<?php

use App\ApplicationLayer\Races\RaceFinishChecker;
use App\DomainModelLayer\Races\Race;
use App\DomainModelLayer\Races\RaceHorse;
use App\DomainModelLayer\Races\Horse;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CreateRaceApiTest extends TestCase
{
    use DatabaseTransactions;

    public function testCreateRaceApiFail(){
        DB::table('race')->insertGetId([
            'status' => 'started',
            'length' => 1500,
            'time'=> 0
        ]);
        DB::table('race')->insertGetId([
            'status' => 'started',
            'length' => 1500,
            'time'=> 0
        ]);
        DB::table('race')->insertGetId([
            'status' => 'started',
            'length' => 1500,
            'time'=> 0
        ]);
        $response = $this->call('POST', 'create/race');
        $this->assertEquals(400, $response->status());
        $message = json_decode($response->content())->errorMessage;
        $this->assertEquals("You can't create more races when there are three running", $message);
    }

    public function testCreateRaceTrue(){
        DB::table('race')->update(['status'=>'finished']);
        $response = $this->call('POST', 'create/race');
        $this->assertEquals(200, $response->status());
    }
}