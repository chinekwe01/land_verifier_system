<?php

namespace Database\Seeders;

use App\Models\Unregistered_Land;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnregisteredLandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $unregisteredLands = [
            [
                'owner_name' => 'John Smith',
                'owner_phone' => '555-434-234',
                'owner_address' => '24 Fredlane, Suite 330',
                'witness' => 'Fred Miles',
                'witness_phone' => '555-434-234',
                'witness_address' => '24 Crest Field, Gray Estate 330',
            ],
            [
                'owner_name' => 'Kelvin Joe',
                'owner_phone' => '234-364-069',
                'owner_address' => '24 Jerry Street, Creed 230',
                'witness' => 'Kate Johnson',
                'witness_phone' => '555-124-850',
                'witness_address' => '24 Miles Field, Gray Estate 330',
            ],
        ];
        foreach ($unregisteredLands as $key => $unregisteredLand) {
            Unregistered_Land::create($unregisteredLand);
        }
    }
}
