<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ordine extends Model
{
    protected $table = 'ordine';

    protected $primaryKey = 'id';

    //protected $fillable = ['users_id', 'modello_id', 'taglia_id', 'colore_id'];

    public $timestamps = true;
}
