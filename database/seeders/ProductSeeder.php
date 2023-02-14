<?php

namespace Database\Seeders;

use App\Models\Products;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $products=[
            [
                'name'=>'Camisa',
                'category_id'=>'1',
                'details'=>'tela de lino',
                'description'=>'camisa de lino para verano',
                'categoria'=>'camisas',
                'brand'=>'Zara',
                'price'=>'80',
                'shipping_cost'=>'10',
                'image_path'=>'storage/products/0V5sJBgFsWHHEE1ZXFdBB0LnrX4EzTlT7DgjcYsW.jpg'
            ],
            [
                'name'=>'Camisa2',
                'category_id'=>'1',
                'details'=>'tela de lino',
                'description'=>'camisa de lino para verano',
                'categoria'=>'camisas',
                'brand'=>'Zara',
                'price'=>'80',
                'shipping_cost'=>'10',
                'image_path'=>'storage/products/0V5sJBgFsWHHEE1ZXFdBB0LnrX4EzTlT7DgjcYsW.jpg'
            ],
            [
                'name'=>'Dress',
                'category_id'=>'2',
                'details'=>'Women Dress, Summer',
                'description'=>'women dress for summer',
                'categoria'=>'remeras',
                'brand'=>'Zara',
                'price'=>'120',
                'shipping_cost'=>'10',
                'image_path'=>'storage/products/skSNMeqqUjOkBsqYNfPeuWa2K8L9c747MNsUDuGl.jpg'
            ]
        ];
        foreach ($products as $key=>$value) {
            Products::create($value);
        }
    }
}
