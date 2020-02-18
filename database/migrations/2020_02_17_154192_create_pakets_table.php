<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paket', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('nmpaket', 250);
            $table->decimal('pagurmp', 15, 2);
            $table->integer('ta');
            $table->decimal('trgoutput', 8, 2);
            $table->string('satoutput');
            $table->decimal('trgoutcome', 8, 2);
            $table->unsignedBigInteger('satoutcome_id');
            $table->unsignedBigInteger('ppk_id');
            $table->unsignedBigInteger('balai_id');
            $table->string('kdsatker', 8);
            $table->string('kdkabupaten', 4);
            $table->string('kddesa', 10);
            $table->string('kdoutput', 3);
            $table->unsignedBigInteger('wilayah_id');
            $table->unsignedBigInteger('fnf_id');
            $table->unsignedBigInteger('ks_id');
            $table->unsignedBigInteger('apbnsbsn_id');
            $table->unsignedBigInteger('sycmyc_id');
            $table->unsignedBigInteger('status_kontrak_id');
            $table->string('slug');
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
        Schema::dropIfExists('paket');
    }
}
