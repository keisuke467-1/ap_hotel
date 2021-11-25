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

    //スコープで人数に合う部屋をroomgroupから持ってくる
    public function scopeSearchCapacity($query, $capacity)
    {
        $room_group = Roomgroup::where('max_capacity',$capacity->input)->pluck('room_numbers');
        $param = ['input' => $capacity->input, 'item' => $item];
        return view('room.index', $param);
    }
}
