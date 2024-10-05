<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $table_name = "citys";

    protected $fillable = [
        'city_id','city_name','state_id'
    ];
}
