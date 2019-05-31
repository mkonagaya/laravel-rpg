<?php

use Illuminate\Database\Seeder;

class XiensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $xiens = self::prepare();
        $coefficient = 1;
        foreach ($xiens as $xien_seed){
            
            $xien = new App\Xien();
            $xien->xien_name = $xien_seed[0];
            $xien->base = $xien_seed[1];
            $xien->random = $xien_seed[2];
            $xien->hp_min = $xien_seed[3];
            $xien->hp_max = $xien_seed[4];
            $xien->mp_min = $xien_seed[5];
            $xien->mp_max = $xien_seed[6];
            $xien->sp_min = $xien_seed[7];
            $xien->sp_max = $xien_seed[8];
            $xien->coefficient  = $coefficient++;
            $xien->save();
        }
    }
    
    private static function prepare()
    {
        $xiens = [];
        $xiens[] = explode(',', '無属性,MR,INT,3,8,3,7,6,14');
        $xiens[] = explode(',', '火炎系,INT,DEX,5,10,4,8,10,18');
        $xiens[] = explode(',', '氷結系,INT,MR,3,8,5,9,6,14');
        $xiens[] = explode(',', '疾風系,DEX,INT,7,12,3,7,8,16');
        $xiens[] = explode(',', '大地系,DEF,INT,7,12,2,6,8,16');
        $xiens[] = explode(',', '電撃系,INT,MR,4,10,3,7,6,14');
        $xiens[] = explode(',', '白魔法,MR,INT,4,10,3,8,9,18');
        $xiens[] = explode(',', '黒魔法,INT,MR,3,8,5,9,6,14');
        $xiens[] = explode(',', '共通系,DEX,AGI,10,20,1,3,20,27');
        $xiens[] = explode(',', '剣系,STAB,DEX,12,22,0,2,24,28');
        $xiens[] = explode(',', '刀系,HACK,DEF,18,28,2,4,22,27');
        $xiens[] = explode(',', '槍系,STAB,DEX,16,26,1,3,20,25');
        $xiens[] = explode(',', '棒系,HACK,STAB,15,25,1,3,17,22');
        $xiens[] = explode(',', '鞭系,HACK,DEX,14,24,1,3,25,33');
        $xiens[] = explode(',', 'メイス,HACK,DEF,15,25,1,3,17,22');
        $xiens[] = explode(',', '強化系,STAB,DEX,12,22,0,2,24,28');
        $xiens[] = explode(',', '変化系,INT,MR,3,8,5,9,7,14');
        $xiens[] = explode(',', '放出系,INT,DEX,5,10,3,8,11,16');
        $xiens[] = explode(',', '物理系,STAB,DEX,12,22,0,1,24,28');
        $xiens[] = explode(',', '魔法系,INT,DEX,5,10,4,8,10,18');
        $xiens[] = explode(',', '補助系,INT,MR,3,8,3,7,6,14');
        $xiens[] = explode(',', '近接系,STAB,DEF,20,30,0,2,27,35');
        $xiens[] = explode(',', '気功系,HACK,DEF,16,25,2,4,25,32');
        $xiens[] = explode(',', '反撃系,DEF,AGI,15,25,1,3,20,27');
        $xiens[] = explode(',', '魔法人形召喚系,INT,DEF,10,20,3,7,13,21');
        $xiens[] = explode(',', '破壊精霊召喚系,INT,DEX,5,10,4,8,10,18');
        $xiens[] = explode(',', '守護精霊召喚系,MR,DEF,3,8,5,9,6,14');
        $xiens[] = explode(',', 'ティエラ系,HACK,DEX,18,28,2,4,22,27');
        $xiens[] = explode(',', '神聖チャント系,MR,INT,5,10,4,8,10,18');
        $xiens[] = explode(',', 'デスサイズ,HACK,DEF,16,26,1,3,20,25');
        $xiens[] = explode(',', 'ホーリーハンマー,DEF,MR,18,28,2,4,25,33');
        $xiens[] = explode(',', '呪術系,INT,DEX,14,18,6,12,15,25');
        $xiens[] = explode(',', '工学系,STAB,DEX,12,22,2,4,24,28');
        $xiens[] = explode(',', 'モンプレイネ剣術,HACK,DEX,16,27,5,7,22,27');
        $xiens[] = explode(',', '悪の武具の魔法活用,HACK,DEX,16,27,5,7,22,27');
        $xiens[] = explode(',', 'アナローズの魔法活用,HACK,DEF,16,27,5,7,22,27');
        $xiens[] = explode(',', '魔力暴走,HACK,DEX,16,27,5,7,22,27');
        $xiens[] = explode(',', '錬金系,INT,MR,3,8,5,9,6,14');
        
        return $xiens;
    }
    
    
    
    
    /*
    

    
    
    */
}
