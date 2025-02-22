<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class ExhibitionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (User::count() == 0) {
            \App\Models\User::factory(10)->create();
        }

        $userIds = User::pluck('id');

        $items = [
            [
                'user_id' => '外部ID',
                'name' => '腕時計',
                'condition' => '良好',
                'brand' => 'ARMANI',
                'price' => '15000',
                'description' => 'スタイリッシュなデザインのメンズ腕時計',
                'image' => 'items/Armani.jpg',
            ],
            [
                'user_id' => '外部ID',
                'name' => 'HDD',
                'condition' => '目立った傷や汚れなし',
                'brand' => '不明',
                'price' => '5000',
                'description' => '高速で信頼性の高いハードディスク',
                'image' => 'items/HDD.jpg',
            ],
            [
                'user_id' => '外部ID',
                'name' => '玉ねぎ3束',
                'condition' => 'やや傷や汚れあり',
                'brand' => '不明',
                'price' => '300',
                'description' => '新鮮な玉ねぎの3束セット',
                'image' => 'items/Onion.jpg',
            ],
            [
                'user_id' => '外部ID',
                'name' => '革靴',
                'condition' => '状態が悪い',
                'brand' => '不明',
                'price' => '4000',
                'description' => 'クラシックなデザインの革靴',
                'image' => 'items/LeatherShoes.jpg',
            ],
            [
                'user_id' => '外部ID',
                'name' => 'ノートPC',
                'condition' => '良好',
                'brand' => '不明',
                'price' => '45000',
                'description' => '高性能なノートパソコン',
                'image' => 'items/Laptop.jpg',
            ],
            [
                'user_id' => '外部ID',
                'name' => 'マイク',
                'condition' => '目立った傷や汚れなし',
                'brand' => '不明',
                'price' => '8000',
                'description' => '高音質のレコーディング用マイク',
                'image' => 'items/Mic.jpg',
            ],
            [
                'user_id' => '外部ID',
                'name' => 'ショルダーバッグ',
                'condition' => 'やや傷や汚れあり',
                'brand' => '不明',
                'price' => '3500',
                'description' => 'おしゃれなショルダーバッグ',
                'image' => 'items/Purse.jpg',
            ],
            [
                'user_id' => '外部ID',
                'name' => 'タンブラー',
                'condition' => '状態が悪い',
                'brand' => '不明',
                'price' => '500',
                'description' => '使いやすいタンブラー',
                'image' => 'items/Tumbler+souvenir.jpg',
            ],
            [
                'user_id' => '外部ID',
                'name' => 'コーヒーミル',
                'condition' => '良好',
                'brand' => '不明',
                'price' => '4000',
                'description' => '主導のコーヒーミル',
                'image' => 'items/CoffeeGrinder.jpg',
            ],
            [
                'user_id' => '外部ID',
                'name' => 'メイクセット',
                'condition' => '目立った傷や汚れなし',
                'brand' => '不明',
                'price' => '2500',
                'description' => '便利なメイクアップセット',
                'image' => 'items/Cosmetics.jpg',
            ],
        ];
        foreach ($items as &$item) {
            $item['user_id'] = $userIds->random();
        }

        DB::table('exhibitions')->insert($items);
    }
}
