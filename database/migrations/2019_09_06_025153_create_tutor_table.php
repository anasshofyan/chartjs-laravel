<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTutorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutor', function (Blueprint $table) {
            $table->increments('kode_id');
            $table->string('nama_tutor', 100);
            $table->date('tanggal_masuk');
            $table->date('tanggal_lahir');
            $table->string('area');
            $table->string('asal_institusi');
            $table->longText('alamat_domisili');
            $table->string('bidang', 50);
            $table->string('no_telepon', 15);
            $table->string('email', 50);
            $table->string('medsos', 50);
            $table->string('status', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tutor');
    }
}
