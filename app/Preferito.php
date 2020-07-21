<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Preferito extends Model
{
    protected $table = 'preferito';

    protected $primaryKey = 'id';

    public $timestamps = false;
}
