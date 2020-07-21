<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quantita extends Model
{
    protected $table = 'quantita';

    protected $primaryKey = 'id';

    protected $fillable = ['quantita'];

    public $timestamps = false;
}
