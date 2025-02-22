<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoriesTableSeeder::class);
        $this->call(PurchasesTableSeeder::class);
        $this->call(ExhibitionsTableSeeder::class);
        User::factory()->count(10)->create();
    }
}
