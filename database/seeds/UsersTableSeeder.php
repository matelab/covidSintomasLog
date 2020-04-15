<?php

use Illuminate\Database\Seeder;
use App\User;
use App\HistorySymptom;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create
        ([
        'name'=>'MateLab',
        'email'=>'matelab@matelab.com.ar',
        'email_verified_at'=> now(),
        'password'=> bcrypt('12345678')
        ]);

        factory(HistorySymptom::class, 20)->create();
    }
}
