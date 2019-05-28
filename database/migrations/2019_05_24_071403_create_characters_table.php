<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->bigIncrements('id');    
            $table->unsignedBigInteger('character_model_type_id')->comment('キャラクターモデルID');
            $table->foreign('character_model_type_id')->references('id')->on('character_model_types')->onDelete('cascade');
            
            $table->unsignedBigInteger('user_id')->comment('ユーザID');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            
            
            $table->string('character_name');
            $table->unsignedInteger('level')->default(1);
            $table->unsignedInteger('exp')->default(0)->comment('経験値');
            $table->unsignedInteger('hp');
            $table->unsignedInteger('mp');
            $table->unsignedInteger('sp');
            
            $table->unsignedInteger('stab')->comment('物理攻撃力-斬撃');
            $table->unsignedInteger('hack')->comment('物理攻撃力-刺突');
            $table->unsignedInteger('def')->comment('物理防御力');
            $table->unsignedInteger('int')->comment('魔法攻撃力');
            $table->unsignedInteger('mr')->comment('魔法防御力-回復力');
            $table->unsignedInteger('dex')->comment('命中率 CRI回避率');
            $table->unsignedInteger('agi')->comment('回避率 CRI発生率');
            
            $table->unsignedBigInteger('xien_id');
            $table->foreign('xien_id')->references('id')->on('xiens')->onDelete('cascade');
            
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
        Schema::dropIfExists('characters');
    }
}
