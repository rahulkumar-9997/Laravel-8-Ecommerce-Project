<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_categories')->insert([
            [
                'name' => 'Men',
                'created_by' => 1,
            ],
            [
                'name' => 'Women',
                'created_by' => 1,
            ],
            [
                'name' => 'Kids',
                'created_by' => 2,
            ],
        ]);
    }
}
