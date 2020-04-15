<?php

use Illuminate\Database\Seeder;
use App\User;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**Creamos un Usuario por Defecto */
        User::create
        ([
        'name'=>'MateLab',
        'email'=>'matelab@matelab.com.ar',
        'email_verified_at'=> now(),
        'password'=> bcrypt('12345678')
        ]);

    }
}
