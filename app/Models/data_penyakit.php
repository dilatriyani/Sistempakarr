<?php

namespace App\Models;

use App\Models\Gejala;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class data_penyakit extends Model
{
    use HasFactory;

    protected $guarded = [' '];

    protected $table = "data_penyakits";
    public function data_gejala()
    {
        return $this->hasMany(Gejala::class, 'id', 'daftar_gejala');
    }
}
