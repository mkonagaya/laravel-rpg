<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManualAllocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manual_allocations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->unsignedInteger('hp');
            $table->unsignedInteger('mp');
            $table->unsignedInteger('sp');
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
        Schema::dropIfExists('manual_allocations');
    }
}
