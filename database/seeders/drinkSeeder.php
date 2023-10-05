<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class drinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('drink')->insert([
            [
                'name'=>'Pop Ice',
                'price'=> '2000',
                'description'=>'Minuman es berperisa.',
                'image'=> 'Popice.jpg'
            ],
            [
                'name'=>'Marimas',
                'price'=> '2000',
                'description'=>'Minuman es berperisa.',
                'image'=> 'marimas.jpg'
            ]
        ]);
    }
}
