<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public $fillable = ['id','name', 'description']; //anuntam ca tabelul nostru este alcatuid din field id, name si description
}
