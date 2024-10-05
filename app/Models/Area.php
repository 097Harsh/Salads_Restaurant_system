<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;
    protected $table_name = "areas";

    protected $fillable = [
        'area_id','area_name','city_id'
    ];
}
