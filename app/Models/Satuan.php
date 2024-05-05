<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Satuan extends Model
{
    protected $table = "satuans";
    protected $primaryKey= "kode_satuan";
    protected $keyType = "string";
    public $incrementing = false;
    public $timestamps = false;

    public function barangs(): HasMany {
        return $this->hasMany(Barang::class,'kode_satuan_id', 'kode_satuan');
    }
}
