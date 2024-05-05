<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Barang extends Model
{
    protected $table = "barangs";
    protected $primaryKey = "kode_barang";
    protected $keyType = "string";
    public $incrementing = false;
    public $timestamps = false;

    public function satuan(): BelongsTo
    {
        return $this->belongsTo(Satuan::class,'kode_satuan_id', 'kode_satuan');
    }
}
