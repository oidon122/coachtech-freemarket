<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PurchasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $purchases = [
            ['name' => 'コンビニ払い'],
            ['name' => 'カード払い'],
        ];

        DB::table('purchases')->insert($purchases);
    }
}
