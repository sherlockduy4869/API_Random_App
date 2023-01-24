<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $table = 'tbl_food';

    protected $fillable = [
        'food_name', 
        'created_at', 
        'updated_at'
    ];

    protected $primaryKey = 'food_id';

    use HasFactory;
}
