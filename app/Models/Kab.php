<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kab extends Model
{
    use HasFactory;
    protected $table = 'kab_kota';
    protected $fillable = ['id','nama'];
    public function umkm(){
        return $this->belongsTo(Umkm::class);
    }
}
