<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class LieterRecord extends Model
{
    protected $connection = 'mongodb';

    protected $collection = "tables";

    use HasFactory;
}
