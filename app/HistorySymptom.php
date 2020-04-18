<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HistorySymptom extends Model
{
    public function historySymptomDetails()
    {
        return $this->hasMany(HistorySymptomDetail::class);
    }
    public function historySymptomUser()
    {
        return $this->belongsTo(User::class);
    }
}
