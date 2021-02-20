<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipeBuku extends Model
{
    public function bookss()
    {
        return $this->belongsTo(Buku::class);
    }

    protected $fillable = ['tags'];
}
