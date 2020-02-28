<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    protected $table = 'foto';

    protected $primaryKey = 'id';

    protected $fillable = ['modello_id', 'data'];
}
