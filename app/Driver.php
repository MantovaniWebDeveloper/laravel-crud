<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    public $timestamps = false;

    //qui gli diciamo cosa si deve salvare il resto verrà ignorato
    protected $fillable = ['name','surname','team'];

}
