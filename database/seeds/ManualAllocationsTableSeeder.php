<?php

use Illuminate\Database\Seeder;

class ManualAllocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $allos = self::prepare();
        
        foreach ($allos as $seed){
            
            $xien = new App\ManualAllocation();
            $xien->name = $seed[0];
            $xien->hp = $seed[1];
            $xien->mp = $seed[2];
            $xien->sp = $seed[3];
            $xien->save();
        }
    }
    
    private static function prepare()
    {
        $allos = [];
        $allos[] = explode(',', 'stab,7,1,8');
        $allos[] = explode(',', 'hack,15,2,4');
        $allos[] = explode(',', 'int,1,20,2');
        $allos[] = explode(',', 'def,90,0,3');
        $allos[] = explode(',', 'mr,2,20,6');
        $allos[] = explode(',', 'dex,5,3,30');
        $allos[] = explode(',', 'agi,8,2,10');
        
        return $allos;
    }
    
}