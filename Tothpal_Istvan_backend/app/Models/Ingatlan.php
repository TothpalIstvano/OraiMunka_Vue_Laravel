<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingatlan extends Model
{
    protected $table = 'ingatlanok';
    public $timestamps = false;

    protected $guarded = [];

    public function kategoria()
    {
        return $this->belongsTo(Kategoria::class, 'kategoria');
    }
}
