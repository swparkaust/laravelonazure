<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $s1 = new \App\Models\Auto([
            'Make' => 'Honda',
            'Model' => "Civic"
        ]);
        $s1->save();

        $s2 = new \App\Models\Auto([
            'Make' => 'Hyundai',
            'Model' => "Kona"
        ]);
        $s2->save();

        $s3 = new \App\Models\Auto([
            'Make' => 'Ford',
            'Model' => "Fiesta"
        ]);
        $s3->save();

        $s4 = new \App\Models\Auto([
            'Make' => 'Kia',
            'Model' => "Soul"
        ]);
        $s4->save();

        $s5 = new \App\Models\Auto([
            'Make' => 'VW',
            'Model' => "Golf"
        ]);
        $s5->save();    }
}
