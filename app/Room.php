<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class room extends Model
{
    protected $fillable = ['roomgroups_id','room_numbers'];

    protected $primaryKey = 'roomgroups_id';


    public function roomgroup()
    {
        return $this->belongsTo('App\Roomgroup','roomgroups_id');
    }

    public function reserves()
    {
        return $this->belongsToMany('App\Reserve','reserve_room','room_id','reserve_id');
    }
}
