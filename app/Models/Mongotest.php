<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Mongotest extends Model
{
    protected $connection = 'mongo';
    protected $guarded = [''];

}
