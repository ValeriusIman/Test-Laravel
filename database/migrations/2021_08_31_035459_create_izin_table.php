<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIzinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('izin', function (Blueprint $table) {
            $table->bigIncrements('id_izin');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');
            $table->date('tgl_mulai_izin');
            $table->date('tgl_akhir_izin');
            $table->string('permohonan',255);
            $table->timestamps();

//            $table->bigIncrements('id_doc');
//            $table->bigInteger('id_izin')->nullable();
//            $table->foreign('id_izin','tbl_id_izin_foreign')->references('id_izin')->on('izin');
//            $table->string('file',255);
//            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('izin');
    }
}
