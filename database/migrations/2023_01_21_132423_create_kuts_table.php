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
        Schema::create('kuts', function (Blueprint $table) {
            $table->id();
            $table->text('text');
            $table->string('name');
            $table->string('email');
            $table->unsignedBigInteger('kut_id');

            $table->foreign('kut_id')->references('id')->on('kuts');
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
        Schema::dropIfExists('kuts');
    }
};
