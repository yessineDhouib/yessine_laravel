<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB; 
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
            'name'=>'oppo mobile',
            'price'=>'300',
            'description'=>"A Smartphone with 8gb ram and much more feature",
            "category"=>"mobile",
            "gallery"=>"https://m.media-amazon.com/images/I/71geVdy6-OS._SX569_.jpg",
            ],
            [
                'name'=>'panasonic tv',
                'price'=>'700',
                'description'=>"This list contains 244 Panasonic TVs in India. This price list was last updated on Aug 06, 2022.",
                "category"=>"tv",
                "gallery"=>"https://cdn1.smartprix.com/rx-ifUe2qUWe-w1200-h1200/fUe2qUWe.jpg"
            ],
            [
                'name'=>'sony tv',
                'price'=>'600',
                'description'=>"This list contains 247 sony TVs in India. This price list was last updated on Aug 06, 2022.",
                "category"=>"tv",
                "gallery"=>"{http://static.rcwilley.com/products/111901420/Sony-X950H-65-Inch-4K-Full-Array-HDR-LED-TV-rcwilley-image1~800.jpg"
            ],
            [
                'name'=>'frigde LG',
                'price'=>'1000',
                'description'=>"LG 793L Matt Black French Door Instaview Fridge - GC-X268NQSM",
                "category"=>"frigde",
                "gallery"=>"https://www.hirschs.co.za/media/catalog/product/cache/5650c527889287cec4d241f33ee3fa4b/7/3/73114_6bfef85c67ddaabc4f5795ce12e253c3.jpg"
            ]
        ]);
       
    }
}
