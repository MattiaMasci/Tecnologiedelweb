<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collezione extends Model
{
    protected $table = 'collezione';

    protected $primaryKey = 'id';

    public $timestamps = false;
}
