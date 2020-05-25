<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ordine extends Model
{
    protected $table = 'ordine';

    protected $primaryKey = 'id';

    public $timestamps = true;
}
