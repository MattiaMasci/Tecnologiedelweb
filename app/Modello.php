<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modello extends Model
{
    protected $table = 'modello';

    protected $primaryKey = 'id';

    public $timestamps = false;
}
