<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Roomgroup;

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

    //RoomControllerから渡された引数を$capacityで受け取って、
    //Roomgroupモデル（テーブル）から$capacityが
    //'max_capacity'（カラム名）以下である
    //'id'を抽出したものを$room_groupに代入する。

    // pluck('id')で検索結果から[idカラム]の値をリストで取得
    public function scopeSearchCapacity($query, $capacity)
    {
        $room_group = Roomgroup::where('max_capacity', '>=' ,$capacity)->pluck('id');

        // whereInでリスト化された[id]と合うレコードを複数返す
        return $query->whereIn('roomgroups_id',$room_group);
    }

    //
    public function scopeSearchGroup($query, $group)
    {
        return $query->whereIn('roomgroups_id',1);
    }
}
