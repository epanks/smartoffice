<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePpksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ppk', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nmppk', 40);
            $table->string('kdsatker');
            $table->string('no_tlp_ppk')->nullable();
            $table->unsignedBigInteger('wilayah_id');
            $table->unsignedBigInteger('balai_id');
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
        Schema::dropIfExists('ppk');
    }
}
