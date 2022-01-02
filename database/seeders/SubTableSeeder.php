<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SubType;

class SubTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subs = [
            [
                'id'         => 1,
                'type'       => 'Starter',
                'price'      => '279',
            ],
            [
                'id'         => 2,
                'type'       => 'Standard',
                'price'      => '399',
            ],
            [
                'id'         => 3,
                'type'       => 'Premium',
                'price'      => '649',
            ],
        ];

        SubType::insert($subs);
    }
}
