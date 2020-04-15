<?php

use Illuminate\Database\Seeder;
use App\HistorySymptom;

class HistorySymptomTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(HistorySymptom::class, 20)->create();
    }
}
