<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class todo extends Model
{
    protected $table = "todolist";
    protected $fillable = ["task","is_completed"];
}
