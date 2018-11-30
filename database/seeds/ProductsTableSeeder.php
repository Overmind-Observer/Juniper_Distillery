<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'product_name' => 'wine4',
            'product_image' => 'wine_image4',
            'product_subtitle' => 'grape4',
            'product_price' => '44000',
            'product_quantity' => '440',
            'product_description' => 'wine4_description with abcd',
            'session_id' => 'wine4_session',
        ]);
        Product::create([
            'product_name' => 'wine5',
            'product_image' => 'wine_image5',
            'product_subtitle' => 'grape5',
            'product_price' => '55000',
            'product_quantity' => '550',
            'product_description' => 'wine5_description with abcd',
            'session_id' => 'wine5_session',
        ]);

        Product::create([
            'product_name' => 'spirits1',
            'product_image' => 'spirits_image1',
            'product_subtitle' => 'spirits_top1',
            'product_price' => '90000',
            'product_quantity' => '900',
            'product_description' => 'spirits1_description with absolve',
            'session_id' => 'spirits1_session',
        ]);
        Product::create([
            'product_name' => 'spirits2',
            'product_image' => 'spirits_image2',
            'product_subtitle' => 'spirits_top2',
            'product_price' => '20000',
            'product_quantity' => '200',
            'product_description' => 'spirits2_description with absolve',
            'session_id' => 'spirits2_session',
        ]);
        Product::create([
            'product_name' => 'spirits3',
            'product_image' => 'spirits_image3',
            'product_subtitle' => 'spirits_top3',
            'product_price' => '230000',
            'product_quantity' => '2300',
            'product_description' => 'spirits3_description with absolve',
            'session_id' => 'spirits3_session',
        ]);
        Product::create([
            'product_name' => 'spirits4',
            'product_image' => 'spirits_image4',
            'product_subtitle' => 'spirits_top4',
            'product_price' => '43000',
            'product_quantity' => '4300',
            'product_description' => 'spirits4_description with absolve',
            'session_id' => 'spirits4_session',
        ]);
        Product::create([
            'product_name' => 'liqour5',
            'product_image' => 'liqour_image5',
            'product_subtitle' => 'liqourgrape',
            'product_price' => '50000',
            'product_quantity' => '500',
            'product_description' => 'liqour5_description with abcd',
            'session_id' => 'liqour5_session',
        ]);
    }
}
