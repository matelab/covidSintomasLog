<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Propaganistas\LaravelFakeId\RoutesWithFakeIds;
class HistorySymptom extends Model
{
    use RoutesWithFakeIds;
    public function historySymptomDetails()
    {
        return $this->hasMany(HistorySymptomDetail::class);
    }
    public function historySymptomUser()
    {
        return $this->belongsTo(User::class);
    }
}
