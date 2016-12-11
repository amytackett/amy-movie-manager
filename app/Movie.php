<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{

    public $fillable = ['title','format','length','year','rating'];

}