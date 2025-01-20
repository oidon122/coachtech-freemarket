<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PurchasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'コンビニ払い'
        ];
        DB::table('purchases')->insert($param);
        $param = [
            'category' => 'カード支払い'
        ];
        DB::table('purchases')->insert($param);
    }
}
