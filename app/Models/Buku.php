<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    public function penulis()
    {
        return $this->belongsTo(Penulis::class, 'idpenulis');
    }

    public function tags()
    {
        return $this->belongsTo(TipeBuku::class, 'idtags');
    }

    protected $fillable = ['idpenulis', 'idtags', 'judul', 'deskripsi'];
}
