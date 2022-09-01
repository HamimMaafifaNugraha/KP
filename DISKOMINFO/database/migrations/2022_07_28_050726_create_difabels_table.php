<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('difabels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('barang');
            $table->string('pemilik');
            $table->date('tanggal');
            $table->char('image');
            $table->char('wa');
            $table->char('opsi1_check')->nullable();
            $table->char('opsi2_check')->nullable();
            $table->char('opsi3_check')->nullable();
            $table->char('opsi4_check')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('difabel');
    }
};
