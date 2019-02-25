<?php

use Illuminate\Database\Seeder;
use App\Driver;
use Faker\Generator as Faker; //importo il faker per generare poi dati casuali da popolare db


class DriverTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $classeFaker)
    {
        for ($i=0; $i < 20 ; $i++) {

          $newDriver = new Driver();
          $newDriver->name = $classeFaker->firstNameMale();
          $newDriver->surname = $classeFaker->lastname();
          $newDriver->team = $classeFaker->firstName();

          $newDriver->save();

        }
    }
}
