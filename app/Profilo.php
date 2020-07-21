<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profilo extends Model
{
    protected $table = 'profilo';

    protected $primaryKey = 'id';

    protected $fillable = ['nomefatturazione', 'cognomefatturazione', 'emailfatturazione'];

    public $timestamps = false;
}
