<?php

use Illuminate\Database\Seeder;
use App\Gym;

class GymTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gym = new Gym;
        $gym->gym_name = 'The Refinery';
        $gym->gym_city = 'Champaign';
        $gym->gym_state= 'Illinois';
        $gym->save();

        $gym = new Gym;
        $gym->gym_name = 'The Fitness Center';
        $gym->gym_city = 'Champaign';
        $gym->gym_state= 'Illinois';
        $gym->save();

        $gym = new Gym;
        $gym->gym_name = 'Charter Fitness';
        $gym->gym_city = 'Champaign';
        $gym->gym_state= 'Illinois';
        $gym->save();

        $gym = new Gym;
        $gym->gym_name = 'The Arc';
        $gym->gym_city = 'Champaign';
        $gym->gym_state= 'Illinois';
        $gym->save();
    }
}

