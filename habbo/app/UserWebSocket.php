<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserWebSocket extends Model
{
  public $timestamps = false;

  protected $primaryKey = 'user_id';
  
  protected $table = 'user_websocket';

  protected $fillable = ['user_id', 'auth_ticket', 'is_staff'];
}
