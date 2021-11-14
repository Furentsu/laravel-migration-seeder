<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
     protected $fillable = ['name','location','date','number_of_people','description','price'];
}
