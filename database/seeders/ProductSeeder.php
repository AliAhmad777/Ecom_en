<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
            'name'=>'LG Q7',
            'price'=>'200',
            'category'=>'mobile',
            'description'=>'A smartphone with 4gb ram and more feature',
            'gallery'=>'https://www.lg.com/levant_en/images/plp-b2c/levanten-mobilephones-hero-2-m.jpg'
            ],

           [
            'name'=>'LG Electronics',
            'price'=>'400',
            'category'=>'mobile',
            'description'=>'A smartphone with 6gb ram and more feature',
            'gallery'=>'https://fdn.gsmarena.com/imgroot/news/21/01/lg-in-talks-with-vietnamese-conglomerate-to-sell/-1200w5/gsmarena_000.jpg'
           ],


           [
            'name'=>'eAirtec',
            'price'=>'7,999',
            'category'=>'tv',
            'description'=>'eAirtec 81 cms (32 inches) HD Ready Smart LED TV 32DJSM (Black) (2022 Model)',
            'gallery'=>'https://www.amazon.in/eAirtec-inches-Ready-Smart-32DJSM/dp/B07M9K7HX8'
           ],

           [
            'name'=>'Tvabonnemanget',
            'price'=>'450',
            'category'=>'tv',
            'description'=>'smart tv 32 tum, eller en billig tv 55 tum',
            'gallery'=>'https://www.tvabonnemanget.se/img/nyheter/smart-tv-32-tum-eller-en-billig-tv-55-tum.jpeg'
           ],


           [
            'name'=>'Samsung 616L Family Hub',
            'price'=>'3,105',
            'category'=>'fridge',
            'description'=>'Samsung 616L Family Hub Side By Side Fridge Matte Black SRS656MBFH4',
            'gallery'=>'https://www.appliancesonline.com.au/public/images/product/srs656mbfh4/extrnl/samsung-656l-family-hub-side-by-side-fridge-matte-black-srs656mbfh4-1-e8263c81-high.jpeg'
           ],

           [
            'name'=>'Apple iPhone 13 Pro Max (128GB)',
            'price'=>'1099',
            'category'=>'mobile',
            'description'=>'17 cm (6.7-inch) Super Retifor a faster, more responsive feel
            12Mg',
            'gallery'=>'https://m.media-amazon.com/images/I/61IJBsHm97L._SX522_.jpg'
            ]
    ]);
    }
}
