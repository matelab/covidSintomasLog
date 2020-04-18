<?php

use Illuminate\Database\Seeder;
use App\HistorySymptomDetail;

class HistorySymptomDetailsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(HistorySymptomDetail::class, 20)->create();
    }
}
