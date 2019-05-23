<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharacterTable extends Migration
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
            $table->bitInteger('model_id')->comment('キャラクターモデルID');
            $table->string('character_name');
            $table->integer('level')->default(1);
            $table->integer('exp')->default(0)->comment('経験値');
            $table->integer('stab')->comment('物理攻撃力-斬撃');
            $table->integer('hack')->comment('物理攻撃力-刺突');
            $table->integer('def')->comment('物理防御力');
            $table->integer('int')->comment('魔法攻撃力');
            $table->integer('mr')->comment('魔法防御力-回復力');
            $table->integer('dex')->comment('命中率 CRI回避率');
            $table->integer('agi')->comment('回避率 CRI発生率');
            
            $table->integer('hp')->comment('魔法防御力-回復力');
            $table->integer('mp')->comment('命中率 CRI回避率');
            $table->integer('sp')->comment('回避率 CRI発生率');
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
