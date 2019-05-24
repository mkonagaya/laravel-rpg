<?php

use Illuminate\Database\Seeder;

class CharacterModelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        /**
         * 

        */
        
        $names = [
            'ルシアン・カルツ',
            'ボリス・ジンネマン ',
            'イスピン・シャルル ',
            'マキシミン・リフクネ ',
            'ティチエル・ジュスピアン',
            'ナヤトレイ',
            'シベリン・ウー',
            'ミラ・ネブラスカ',
            'ジョシュア・フォン・アルニム',
            'クロエ・ダ・フォンティナ',
            'ランジエ・ローゼンクランツ',
            'イサック・デュカステル',
            'アナイス（アナベル）・デル・カリル',
            'イソレット',
            'ベンヤ',
            'ロアミニ（LV200）',
            'ノクターン（LV200）',
            'リーチェ ',
        ];
        
        foreach ($names as $name){
            
            $character_model = new App\CharacterModel();
            $character_model->name = $name;
            $character_model->save();
        }
        
    }
}
