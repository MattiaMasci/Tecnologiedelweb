<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gruppo extends Model
{
    protected $table = 'gruppo';

    protected $primaryKey = 'id';

    public $timestamps = false;
}
