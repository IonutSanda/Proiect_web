<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Placa video EVGA GeForce® RTX™ 3080',
            'description' => 'Placa video EVGA GeForce® RTX™ 3080 FTW3 ULTRA GAMING LHR, 10GB GDDR6X, 320-bit
            ',
            'photo' =>
            'https://s13emagst.akamaized.net/products/39856/39855163/images/res_de2719a29eb8dd09583e1464c571aac2.jpg?width=450&height=450&hash=18737CCE95E859E3CD0EDDFB0CF241E3',
            'price' => 6599.00
        ]);
        DB::table('products')->insert([
            'name' => 'Televizor Walton',
            'description' => 'Televizor Walton 32WA5100, 80 cm, HD, LED, Clasa F',
            'photo' =>
            'https://s13emagst.akamaized.net/products/39039/39038869/images/res_8731eb15dd7a01e56f978db8f58d5b84.png?width=450&height=450&hash=202C719FD6429E68DE5BAD8F69AF0D4A',
            'price' => 599.00
        ]);
        DB::table('products')->insert([
            'name' => 'Incepe sa gandesti',
            'description' => 'Incepe sa gandesti - John C. Maxwell',
            'photo' => 'https://s13emagst.akamaized.net/products/3125/3124093/images/res_eae48bad0ee073cecf03baed14b02c83.jpg?width=450&height=450&hash=009C787815C2A385F5A106F9CA50FE86',
            'price' => 13.49
        ]);
        DB::table('products')->insert([
            'name' => 'SSD extern Samsung',
            'description' => 'SSD extern Samsung T7 portabil, 500GB, USB 3.2, Titan Grey',
            'photo' =>
            'https://s13emagst.akamaized.net/products/32426/32425933/images/res_e41c2f8aaad136254d3c3aa814a677b4.jpg?width=450&height=450&hash=119CEECDB31C1405259CF0244FC9501F',
            'price' => 463.00
        ]);
        DB::table('products')->insert([
            'name' => 'Scaun gaming SENSE7 Vanguard',
            'description' => 'Scaun gaming SENSE7 Vanguard, piele ecologica, 150 kg, Negru',
            'photo' => 'https://s13emagst.akamaized.net/products/39601/39600363/images/res_1a21de0c616163e73a69c0a98d0b944c.jpg?width=450&height=450&hash=3D500A5F9839439B712FEB21230AC714',
            'price' => 799.00
        ]);
        DB::table('products')->insert([
            'name' => 'Telefon mobil Samsung Galaxy A12',
            'description' => 'Telefon mobil Samsung Galaxy A12, Dual SIM, 4GB RAM, 64GB, 4G, Nacho Blue',
            'photo' => 'https://s13emagst.akamaized.net/products/34374/34373160/images/res_f8fe1a328627a0bb3a5541a11fc0b6f6.jpg?width=450&height=450&hash=BAD9BF090771BAEB71FACD8DB034AEEF',
            'price' => 699.99
        ]);
        DB::table('products')->insert([
            'name' => 'Ceas smartwatch Samsung Galaxy Watch4',
            'description' => 'Ceas smartwatch Samsung Galaxy Watch4, 46mm, LTE, Classic, BLACK',
            'photo' => 'https://s13emagst.akamaized.net/products/39759/39758670/images/res_569a16f93e77f0eb3976a7afcb5f1081.jpg?width=450&height=450&hash=661A24A5DD87566FBC8138A39D1540CF',
            'price' => 1729.00
        ]);
        DB::table('products')->insert([
            'name' => 'Boxa inteligenta Google Nest Mini',
            'description' => 'Boxa inteligenta Google Nest Mini Smart Home, Generatia 2, Negru',
            'photo' => 'https://s13emagst.akamaized.net/products/29171/29170058/images/res_2ed51bd5c6f477d0e515faa1ed2773c5.jpg?width=450&height=450&hash=E0C70ED6446F703433CE136FF21A21F6',
            'price' => 179.99
        ]);
    }
}

