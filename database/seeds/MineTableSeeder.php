<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MineTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mine')->truncate(); //2回目実行の際にシーダー情報をクリア
        DB::table('mine')->insert([
            'name' => 'test-user1',
            'age' => 20,
        ]);
 
        DB::table('mine')->insert([
            'name' => 'test-user2',
            'age' => 21,
        ]);

        DB::table('mine')->insert([
            'name' => 'test-user3',
            'age' => 23,
        ]);

        DB::table('mine')->insert([
            'name' => 'test-user4',
            'age' => 34,
        ]);

        DB::table('mine')->insert([
            'name' => 'test-user5',
            'age' => 45,
        ]);

        
    }
}
