<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class foodSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //seeders
        DB::table('food')->insert([
            [
                'name'=> 'Seblak',
                'price'=> '100',
                'description'=> 'Seblak',
                'image'=> 'images/seblak.jpg'
            ],
            [
                'name'=> 'Donat',
                'price'=> '100',
                'description'=> 'Donat',
                'image'=> 'images/donat.jpg'
            ]
        ]);
    }
}
