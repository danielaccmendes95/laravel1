<?php

use Illuminate\Database\Seeder;
use App\User;
use App\UserType;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$role_prof = UserType::where('tipo', 'Profissional de Saúde')->first();
    	$role_admin = UserType::where('tipo', 'Admin')->first();


        $user = new User();
        $user->name="João Matos";
        $user->email="joaomatos@gmail.com";
        $user->password=bcrypt('joaomatos');
        $user->username="joaomatos";
        $user->save();
        $user->tipos()->attach($role_prof);

        $admin = new User();
        $admin->name="Daniela Mendes";
        $admin->email="danielamendes@gmail.com";
        $admin->password=bcrypt('danielamendes');
        $admin->username="danielamendes";
        $admin->save();
        $admin->tipos()->attach($role_admin);


    }
}
