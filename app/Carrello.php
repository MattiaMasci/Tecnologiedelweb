<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrello extends Model
{
    protected $table = 'carrello';

    protected $primaryKey = 'id';

    protected $fillable = ['quantita'];

    public $timestamps = false;
}
