<?php

use Illuminate\Database\Seeder;
use App\UserType;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new UserType();
        $admin->tipo="Admin";
        $admin->save();

        $prof = new UserType();
        $prof->tipo="Profissional de Saúde";
        $prof->save();
    }
}
