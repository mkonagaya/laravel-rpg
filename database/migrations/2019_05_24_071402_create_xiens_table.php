<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateXiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xiens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('xien_name');
            $table->string('base');
            $table->string('random')->comment('ランダムで上昇するステータス。40% - 60%');
            $table->unsignedInteger('hp_min');
            $table->unsignedInteger('hp_max');
            $table->unsignedInteger('mp_min');
            $table->unsignedInteger('mp_max');
            $table->unsignedInteger('sp_min');
            $table->unsignedInteger('sp_max');
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
        Schema::dropIfExists('xiens');
    }
}
