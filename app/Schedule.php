<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = ['line', 'name', 'from', 'fromImage', 'to', 'toImage'];
}
