<?php

namespace Database\Seeders;

use App\Models\Grade;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(
             [
                 ArticleSeeder::class,
                 FaqSeeder::class,
                 GradeSeeder::class,
             ]);
    }
}
