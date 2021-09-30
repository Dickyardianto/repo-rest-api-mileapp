<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Package extends Eloquent
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'package';

    protected $fillable = [
        
    ];
}
