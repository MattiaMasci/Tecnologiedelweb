<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reso extends Model
{
    protected $table = 'reso';

    protected $primaryKey = 'id';

    //protected $fillable = ['users_id', 'modello_id', 'taglia_id', 'colore_id'];

    public $timestamps = false;
}
