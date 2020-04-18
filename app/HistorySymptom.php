<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HistorySymptom extends Model
{
    public function details()
    {
        return $this->hasMany(HistorySymptomDetail::class);
    }
}
