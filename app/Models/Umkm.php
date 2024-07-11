<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Umkm extends Model
{
    use HasFactory;

    protected $table = 'umkm';
    protected $fillable = ['id', 'nama', 'modal', 'pemilik', 'alamat', 'website', 'email', 'rating', 'kategori_id', 'pembina_id', 'kabkota_id'];

    public function kelurahan()
    {
        return $this->belongsTo(Provinsi::class); //belongsTo -> one to many
    }
}
