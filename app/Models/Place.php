<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{

    protected $table = 'tbl_place';

    protected $fillable = [
        'place_name', 
        'created_at', 
        'updated_at'
    ];

    protected $primaryKey = 'place_id';

    use HasFactory;
}
