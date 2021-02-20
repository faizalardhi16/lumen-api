<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penulis extends Model
{
    public function books()
    {
        return $this->hasMany(Buku::class, 'idpenulis');
    }

    protected $fillable = ['nama', 'hobi'];
}
