<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Altre extends Model
{
    protected $table = 'altre';

    protected $primaryKey = 'id';

    protected $fillable = ['foto_id', 'data', 'tipo', 'posizione'];
}
