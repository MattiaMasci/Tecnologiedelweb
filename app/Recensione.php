<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recensione extends Model
{
    protected $table = 'recensione';

    protected $primaryKey = 'id';

    public $timestamps = false;
}
