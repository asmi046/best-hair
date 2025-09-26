<?php

namespace Database\Seeders;

use DB;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'menu_name' => 'Главное меню',
                'title' => 'Концепция',
                'order' => 1,
                'lnk' => "#concept",
            ],
            [
                'menu_name' => 'Главное меню',
                'title' => 'Прайс',
                'order' => 2,
                'lnk' => "#price",
            ],
            [
                'menu_name' => 'Главное меню',
                'title' => 'О компании',
                'order' => 3,
                'lnk' => "#about",
            ],
            [
                'menu_name' => 'Главное меню',
                'title' => 'Контакты',
                'order' => 4,
                'lnk' => "#contacts",
            ],

        ];

        DB::table("menus")->insert($data);

    }
}
