<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modello extends Model
{
    protected $table = 'modello';

    protected $primaryKey = 'id';

    protected $fillable = ['mediavoto', 'collezione_id'];

    public $timestamps = false;
}
