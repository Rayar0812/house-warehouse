<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Houses extends Model
{
    protected $table = 'houses';
    protected $primaryKey = 'uuid';

    public $timestamps = true;
    public $incrementing = false;

    protected $fillable = [
        'name',
        'token',
        'password',
    ];

    protected $hidden = [
        'password'
    ];
}
