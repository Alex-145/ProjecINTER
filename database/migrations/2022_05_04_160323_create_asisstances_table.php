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
        Schema::create('asisstances', function (Blueprint $table) {
            $table->id();
            $table->dateTime('datetime');
            $table->enum('status',['presente', 'tarde', 'no asisto']);
            $table->unsignedBigInteger('asociate_id');
            $table->foreign('asociate_id')->references('id')->on('associates')->onDelete('cascade');
            $table->unsignedBigInteger('activitie_id');
            $table->foreign('activitie_id')->references('id')->on('activities')->onDelete('cascade');
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
        Schema::dropIfExists('asisstances');
    }
};
