<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomUser extends Model
{
    public $timestamps = false;

    protected $table = 'rooms';

    public function userId()
    {
        return $this->belongsTo('App\User', 'owner', 'username');
    }

    public function getUsernameAttribute($value)
    {
        return $this->userId->username;
    }
}
