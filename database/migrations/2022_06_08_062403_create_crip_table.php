<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCripTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crip', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('kriteria_id')->index()->nullable();
            $table->string('nama_crip');
            $table->double('nilai_crip');
            $table->timestamps();
            $table->foreign('kriteria_id')
                ->references('id')
                ->on('kriteria')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('crip');
    }
}
