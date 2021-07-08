<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    protected $table = 'items';
    protected $primaryKey = 'id';

    public $timestamps = true;
    public $incrementing = true;

    protected $fillable = [
        'cabinets_layout_id',
        'category_id',
        'name',
        'image_url',
        'amount',
        'expired_at',
    ];

    protected $hidden = [

    ];
}
