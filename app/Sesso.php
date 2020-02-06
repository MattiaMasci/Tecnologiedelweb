<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sesso extends Model
{
    protected $table = 'sesso';

    protected $primaryKey = 'id';

    public $timestamps = false;
}
