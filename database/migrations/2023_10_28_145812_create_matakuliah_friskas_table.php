<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMatakuliahFriskasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matakuliah_friskas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->text('kodeMataKuliah')->nullable();
            $table->text('namaMataKuliah')->nullable();
            $table->text('sks')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('matakuliah_friskas');
    }
}
