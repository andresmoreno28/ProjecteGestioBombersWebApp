<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContainerContainerTable extends Migration
{
    /**
     * Run the migrations.
     * Un contenidor conté un altre contenidor.
     * @return void
     */
    public function up()
    {
        Schema::create('containers_containers', function (Blueprint $table) {
            $table->timestamps();
            // Foreign Keys.
            $table->unsignedInteger('container_id'); // PK + FK
            $table->foreign('container_id')->references('id')->on('containers')->onDelete('cascade');
            $table->unsignedInteger('container_child_id');
            $table->foreign('container_child_id')->references('id')->on('containers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('containers_containers');
    }
}
