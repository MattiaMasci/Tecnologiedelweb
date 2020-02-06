<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profilo extends Model
{
    protected $table = 'profilo';

    protected $primaryKey = 'id';

    public $timestamps = false;
}
