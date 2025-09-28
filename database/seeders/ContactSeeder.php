<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("contacts")->insert(
            [
                [
                    'name' => 'site_name',
                    'title' => 'Имя сайта',
                    'value' => 'BEST SALON',
                ],

                [
                    'name' => 'phone',
                    'title' => 'Телефон',
                    'value' => '+7 920 710 0880',
                ],

                [
                    'name' => 'vk_lnk',
                    'title' => 'Ссылка на Вконтакте',
                    'value' => 'https://vk.com/best_kursk',
                ],

                [
                    'name' => 'tg_lnk',
                    'title' => 'Ссылка  на Телеграм',
                    'value' => 'tg://resolve?domain=ekaterems',
                ],

                [
                    'name' => 'ws_lnk',
                    'title' => 'Ссылка  на WhatsApp',
                    'value' => 'https://wa.me/79207100880',
                ],

                [
                    'name' => 'adress',
                    'title' => 'Адрес компании',
                    'value' => 'г. Курск ул. Карла-Маркса, д. 66',
                ],

                [
                    'name' => 'work_time',
                    'title' => 'Время работы',
                    'value' => 'с 10:00 до 22:00 без выходных',
                ],

                [
                    'name' => 'email',
                    'title' => 'E-mail',
                    'value' => 'zabor.86@internet.ru',
                ],

                [
                    'name' => 'geo',
                    'title' => 'Кординаты',
                    'value' => '51.75749107225994,36.18305249999999',
                ],

            ]
        );
    }
}
