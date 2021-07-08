<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HousesPattern extends Model
{
    protected $table = 'houses_pattern';
    protected $primaryKey = 'id';

    public $timestamps = true;
    public $incrementing = true;

    protected $fillable = [
        'name',
        'house_uuid',
        'name',
    ];

    protected $hidden = [

    ];
}
