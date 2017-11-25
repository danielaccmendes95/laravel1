<?php

use Illuminate\Database\Seeder;
use App\Gender;

class GenderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $masculino = new Gender();
        $masculino->gender="Masculino";
        $masculino->save();

        $feminino = new Gender();
        $feminino->gender="Feminino";
        $feminino->save();

        $outro = new Gender();
        $outro->gender="Outro";
        $outro->save();
    }
}
