<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servizio extends Model
{
    protected $table = 'servizio';

    protected $primaryKey = 'id';

    public $timestamps = false;
}
