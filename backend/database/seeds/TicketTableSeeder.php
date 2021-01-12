<?php

use Illuminate\Database\Seeder;

class TicketTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ticketsテーブルにデータをinsert
        DB::table('tickets')->insert([
            [
                'ticket_title' => '新宿',
                'price' => '1000'
            ],
            [
                'ticket_title' => '池袋',
                'price' => '1000'
            ],
            [
                'ticket_title' => '丸の内',
                'price' => '1000'
            ]

        ]);
    }
}
