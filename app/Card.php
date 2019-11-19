<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $fillable = ['type_id', 'user_id', 'balance'];
}
