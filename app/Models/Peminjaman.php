<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $table = 'peminjaman'; 
    protected $guarded = [];

    protected $primaryKey = "id"; 

    public $incrementing = true;

    public function detail_peminjaman(){
        return $this->hasMany(DetailPeminjaman::class);
    }

}
