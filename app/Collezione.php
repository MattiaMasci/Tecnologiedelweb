<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collezione extends Model
{
    protected $table = 'collezione';

    protected $primaryKey = 'id';

    protected $fillable = ['nome', 'foto', 'stato', 'reference'];

    public $timestamps = false;
}
