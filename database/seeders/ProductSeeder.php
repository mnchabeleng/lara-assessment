<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::insert([
            [
                'name' => 'Air Jordan 1 Mid',
                'price' => '2399,95',
                'image' => 'https://static.nike.com/a/images/q_auto:eco/t_product_v1/f_auto/dpr_1.0/w_593,c_limit/4704ba44-0d65-41dc-bd5b-57bfcf5f7b14/air-jordan-1-mid-shoes-8jdvlN.png',
                'stock' => rand(1, 100),
                'supplier_id' => 1
            ],
            [
                'name' => 'Air Jordan 1 Low',
                'price' => '2299,95',
                'image' => 'https://static.nike.com/a/images/q_auto:eco/t_product_v1/f_auto/dpr_1.0/w_593,c_limit/28812013-b5f3-4148-a1b4-170227e0e0fe/air-jordan-1-low-shoes-HQW5F3.png',
                'stock' => rand(1, 100),
                'supplier_id' => 1
            ],
            [
                'name' => 'Nike Sportswear Air Max',
                'price' => '1799,95',
                'image' => 'https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/8b743dfd-0d3d-463e-bf4d-42127ba114cb/sportswear-air-max-woven-cargo-trousers-WQLp93.png',
                'stock' => rand(1, 100),
                'supplier_id' => 1
            ],
            [
                'name' => 'Jordan Essentials',
                'price' => '1899,95',
                'image' => 'https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/e0689100-7d11-4504-b4fb-d4b9ec879130/jordan-essentials-utility-trousers-z8kHjH.png',
                'stock' => rand(1, 100),
                'supplier_id' => 1
            ],
            [
                'name' => 'Nike Sportswear Windrunner',
                'price' => '1699,95',
                'image' => 'https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/7cec25eb-ea06-4202-b745-daf98e895581/sportswear-windrunner-hooded-jacket-sP5XX2.png',
                'stock' => rand(1, 100),
                'supplier_id' => 1
            ],
            [
                'name' => 'Jordan Brooklyn Fleece',
                'price' => '1299,95',
                'image' => 'https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/4fbe8b6f-e701-4921-9f72-2f4c34552974/jordan-brooklyn-fleece-pullover-hoodie-RZPJ7c.png',
                'stock' => rand(1, 100),
                'supplier_id' => 1
            ],
            [
                'name' => 'Nike Sportswear Club Fleece',
                'price' => '999,95',
                'image' => 'https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/uxljj6kwd3ur17hoeubg/sportswear-club-fleece-pullover-hoodie-32Tm3L.png',
                'stock' => rand(1, 100),
                'supplier_id' => 1
            ],
            [
                'name' => 'Nike Force 1 Low SE',
                'price' => '1399,95',
                'image' => 'https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/5b6fee2d-79a4-4747-a6fe-59195aaef16f/force-1-low-se-younger-shoes-dtfMHm.png',
                'stock' => rand(1, 100),
                'supplier_id' => 1
            ],
            [
                'name' => 'England 2023 Stadium Away',
                'price' => '1099,95',
                'image' => 'https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/0d89de5c-2017-4824-a02b-46b7f03f3dba/england-2023-stadium-away-older-dri-fit-football-shirt-lRqtX6.png',
                'stock' => rand(1, 100),
                'supplier_id' => 1
            ],
            [
                'name' => 'Nike Academy Team',
                'price' => '479,95',
                'image' => 'https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/46787e12-5f0a-4b7c-9100-1e6fe9fe43c9/academy-team-football-backpack-5qlXz5.png',
                'stock' => rand(1, 100),
                'supplier_id' => 1
            ],
            [
                'name' => 'Nike ACG Therma-FIT',
                'price' => '1799,95',
                'image' => 'https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/951af453-1908-40e3-b130-5e5406c00b44/acg-older-jacket-tRZHWZ.png',
                'stock' => rand(1, 100),
                'supplier_id' => 1
            ],
            [
                'name' => 'Nike Sportswear Storm-FIT',
                'price' => '2499,97',
                'image' => 'https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/95e37d60-dbef-451b-92ec-5863dc44cc3b/sportswear-windrunner-primaloft-jacket-BzNblb.png',
                'stock' => rand(1, 100),
                'supplier_id' => 1
            ],
            [
                'name' => 'Nike Sportswear Therma-FIT Repel',
                'price' => '1899,97',
                'image' => 'https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/5440e494-17a6-4aa5-b025-2cdb74d1873a/sportswear-repel-synthetic-fill-hooded-jacket-2vqCJ0.png',
                'stock' => rand(1, 100),
                'supplier_id' => 1
            ],
            [
                'name' => 'Nike Dri-FIT',
                'price' => '459,97',
                'image' => 'https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/612ae58c-f955-480c-8c3c-e1097693d338/dri-fit-camo-training-shorts-XLMGCl.png',
                'stock' => rand(1, 100),
                'supplier_id' => 1
            ],
            [
                'name' => 'Men\'s Basketball Shoes',
                'price' => '1899,97',
                'image' => 'https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/5abdf3b6-11b1-4ff4-84e3-8da0193de8b0/zion-2-basketball-shoes-XjhskN.png',
                'stock' => rand(1, 100),
                'supplier_id' => 1
            ],
            [
                'name' => 'Jordan Brooklyn',
                'price' => '1199,95',
                'image' => 'https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/c2d75445-603d-41ea-b221-3db59f18243f/jordan-brooklyn-fleece-trousers-s9JW5f.png',
                'stock' => rand(1, 100),
                'supplier_id' => 1
            ],
        ]);
    }
}
