<?php

namespace Cinema;

use Illuminate\Database\Eloquent\Model;

class Password_resets extends Model
{
    protected $table="password_resets";
    protected $fillable = [
        'email', 'token',
    ];
}
