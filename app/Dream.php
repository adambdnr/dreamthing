<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Dream extends Model
{
    use Notifiable;

    protected $fillable = [
        'dream'
    ];
}
