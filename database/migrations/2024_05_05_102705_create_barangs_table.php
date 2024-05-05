<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->string("kode_barang", 255)->nullable(false)->primary();
            $table->string("nama_barang", 255)->nullable(false);
            $table->integer("harga_barang")->nullable()->default(0);
            $table->string("description_barang", 255)->nullable();
            $table->string("kode_satuan_id", 255)->nullable(false);
            $table->foreign("kode_satuan_id")->references("kode_satuan")->on("satuans");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangs');
    }
};
