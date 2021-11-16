<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    protected $fillable = ['hoteluser_id','Number_of_people','check_in','check_out'];

    public function hoteluser()
    {
        return $this->belongsTo('App\Hoteluser');
    }
}
