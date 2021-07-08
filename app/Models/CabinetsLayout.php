<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CabinetsLayout extends Model
{
    protected $table = 'cabinets_layout';
    protected $primaryKey = 'id';

    public $timestamps = true;
    public $incrementing = true;

    protected $fillable = [
        'cabinets_id',
        'name',
        'x_axis',
        'y_axis',
    ];

    protected $hidden = [

    ];
}
