<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cabinets extends Model
{
    protected $table = 'cabinets';
    protected $primaryKey = 'id';

    public $timestamps = true;
    public $incrementing = true;

    protected $fillable = [
        'house_pattern_id',
        'name',
        'image_url',
        'description',
        'location',
    ];

    protected $hidden = [

    ];
}
