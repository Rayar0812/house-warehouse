<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserHouses extends Model
{
    protected $table = 'user_houses';
    protected $primaryKey = 'id';

    public $timestamps = true;
    public $incrementing = true;

    protected $fillable = [
        'user_id',
        'house_uuid',
    ];

    protected $hidden = [

    ];
}
