<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $table = 'supplier';
    protected $fillable = ['nama_supplier', 'kontak', 'alamat'];

    public function pembelian()
    {
        return $this->hasMany(Pembelian::class, 'id_supplier', 'id');
    }
}
