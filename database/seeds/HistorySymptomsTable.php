<?php

use Illuminate\Database\Seeder;
use App\HistorySymptom;

class HistorySymptomsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(HistorySymptom::class, 1)->create();
    }
}
