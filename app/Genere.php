<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genere extends Model
{
    protected $table = 'genere';

    protected $primaryKey = 'id';

    public $timestamps = false;
}
