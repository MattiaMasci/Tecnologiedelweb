<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Taglia extends Model
{
    protected $table = 'taglia';

    protected $primaryKey = 'id';

    public $timestamps = false;
}
