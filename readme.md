# InnoGames - PHP GAME DEVELOPER FOR ELVENAR
[![Build Status](https://travis-ci.org/joemccann/dillinger.svg?branch=master)](https://travis-ci.org/joemccann/dillinger)
This Repository is the implementation for the following task for PHP GAME DEVELOPER FOR ELVENAR
The requirements where to implement the following in php.

  -  A "create race" button which generates a new race of 8 random horses
  -  A button "progress" which advances all races by 10 "seconds" until all horses in the race have completed 1500m
  -  Any currently running races, showing distance covered, horse position, current time
  -  The last 5 race results (top 3 positions and times to complete 1500m)
  -  The best ever time, and the stats of the horse that generated it

#  Features!

  - Horse Race Simulartor
  - Create Race Functionality
  - Advance Race Functionality
  - See all running races
  - See last 5 finished races
  - See Best Horse



# Design

> I have used the DDD architecture pattern to implement this in Laravel 5.3 framework. 
> With one domain "Race"
> 
> App folder structure will contain Application layer which contain all the services and DTOs
> And the Domain Model Layer which contains the main repository interfaces and the all the Entities.
> And the Infrustrure which contains all the repositories.
> 
>I have also isolated responsibilities by creating validator,creator,advancer,race finish checker classes for each 
>functionality with extensive use of dependency injection.
>
> I have left a database called innogames with the some data in it , in the root directory.

### Tech

This task uses a number of open source projects to work properly:

* [Laravel] - Framework for developing php web applications
* [Analogue] - flexible, easy-to-use ORM for PHP
* [Faker] - Library that generates fake data.


### Installation

This Task requires [PHP] v5.6.4+ to run.

Install the dependencies and start the server.

```sh
git clone https://github.com/hatem93/innogames-task.git
composer update
composer dump-autoload
php artisan serve
import innogames database or create a new database named innogames then run
php artisan migrate
```

These are my database variables in the env file.

```sh
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=innogames
DB_USERNAME=root
DB_PASSWORD=
```
Navigate to this url to check that everything is running correctly you should see the webpage requested.

```sh
127.0.0.1:8000
```

### Database Schema
Race Table

| Name | Type | Desctiption |
| ------ | ------ | ------ |
| id | integer |  
| status | enum | started or finished 
| length | biginteger | race length 
| time | biginteger | time currently spent in race 
| created_at | timestamp | time entry is created
| updated_at | timestamp | time entry is updated

Horse Table

| Name | Type | Desctiption |
| ------ | ------ | ------ |
| id | integer |  
| name | varchar(255) | horse name generated through faker 
| speed | double(8,2) | horse speed
| endurance | double(8,2) | horse endurance 
| strength | double(8,2) | horse strength
| created_at | timestamp | time entry is created
| updated_at | timestamp | time entry is updated

Race Horse Table

| Name | Type | Desctiption |
| ------ | ------ | ------ |
| id | integer |  
| race_id | integer | race_id foreign key
| horse_id | integer | horse_id foreign key
| position |integer | not maintained
| covered_distance | integer | distance covered by horse in race
| finish_time | integer | time the horse finished the race
| created_at | timestamp | time entry is created
| updated_at | timestamp | time entry is updated

### APIs

These are all the apis that have been implemented.

| API | Type | Inputs | Desctiption |
| ------ | ------ | ------ | ------ |
| 127.0.0.1:8000/create/race | POST | None |  create a race with 8 randomly generated horses
| 127.0.0.1:8000/advance/races/tensec | POST | None |  advance all races by 10 secs


### Testing
I have implemented 9 test cases with 10 assertions , use the following command to run the tests
```sh
vendor\bin\phpunit
```

License
----

MIT
   [Faker]: <https://github.com/fzaninotto/Faker>
   [Laravel]: <https://laravel.com/docs/5.3>
   [Analogue]: <https://github.com/hatem93/analogue>
   [PHP]: <http://php.net/>
