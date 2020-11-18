<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class author extends Model
{
    //
    protected $fillable = ["nama", "date_of_birth", "pleace_of_birth","gender","email","hp"];
}
