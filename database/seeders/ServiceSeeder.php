<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                'name' => 'توصيل الطلبات للمتاجر',
                'descr' => '',
                'is_active' => 1,
                'photo' => 'services/QynTkiMQreBKxPeAA4OYo2MLo4JAWswIdFfk9p4U.jpg',
                'is_fill_sender' => 1,
            ],
            [
                'name' => 'شحن الطلبات للمتاجر',
                'descr' => '',
                'is_active' => 1,
                'photo' => 'services/xodnC4j6pXRsJiYM4PNN1HGR6BNWTD4d9PXhAmBm.jpg',
                'is_fill_sender' => 1,

            ],
            [
                'name' => 'ارسال طلب خارج المنطقة',
                'descr' => '',
                'is_active' =>1,
                'photo' => 'services/0BS3EwrhKNbWtGHBq5kji6f3ek61cYQTMtahXbe0.jpg',
                'is_fill_sender' => 1,
            ],
            [
                'name' => 'استلام وتوصيل طلب داخل المنطقة',
                'descr' => '',
                'is_active' => 1,
                'is_fill_sender' => 1,
                'photo' => 'services/ITIQHWNBFu4IrBNSqSLoi0faEp2C2K5MukbuRGqT.jpg',
            ],
            [
                'name' => 'استلام شحنة',
                'descr' => '',
                'is_active' => 1,
                'is_fill_sender' => 0,
                'photo' => 'services/rJul9IakH9qGj1M8Kx1lAQbk0D1frXMl3eGGiEqU.jpg',
            ],
            [
                'name' => 'الشحن الدولي ',
                'descr' => '',
                'is_active' => 1,
                'is_fill_sender' => 0,
                'photo' => 'services/ITIQHWNBFu4IrBNSqSLoi0faEp2C2K5MukbuRGqT.jpg',
            ],
            [
                'name' => 'استرجاع الطلبات',
                'descr' => 'الطلبات',
                'is_active' => 1,
                'is_fill_sender' => 0,
                'photo' => 'services/rJul9IakH9qGj1M8Kx1lAQbk0D1frXMl3eGGiEqU.jpg',
            ],
        ]);
    }
}
