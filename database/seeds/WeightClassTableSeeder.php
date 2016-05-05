<?php

use Illuminate\Database\Seeder;
use App\WeightClass;

class WeightClassTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $weightClass = new WeightClass;
        $weightClass->name = 'Light Weight';
        $weightClass->weight = '100-135';
        $weightClass->sex= 'Male';
        $weightClass->save();

        $weightClass = new WeightClass;
        $weightClass->name = 'Middle Weight';
        $weightClass->weight = '136-155';
        $weightClass->sex= 'Male';
        $weightClass->save();

        $weightClass = new WeightClass;
        $weightClass->name = 'Light Heavy Weight';
        $weightClass->weight = '156-185';
        $weightClass->sex= 'Male';
        $weightClass->save();

        $weightClass = new WeightClass;
        $weightClass->name = 'Heavy Weight';
        $weightClass->weight = '186-205';
        $weightClass->sex= 'Male';
        $weightClass->save();
    }
}

