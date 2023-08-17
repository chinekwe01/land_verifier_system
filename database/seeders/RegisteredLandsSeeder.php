<?php

namespace Database\Seeders;

use App\Models\Registered_Land;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegisteredLandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $registeredLands = [
            [
                'registration_number' => 'RL-12345',
                'beacon' => 'B-452',
                'survey_plan' => 'SP-2023-ACD',
                'deals' => 'Sale Agreement dated: 2023-05-10,
                Parties: Seller - John Doe (Phone: 123-456-7890),
                Buyer - Jane Smith (Phone: 987-654-3210),
                Sale Price: $150,000,
                Terms: Cash payment, transfer of ownership on full payment,
                ',
                'date_registered' => '2023-06-01',
                'owner' => 'Jane Smith (Phone: 987-654-3210)',
                'formerOwner' => 'John Doe (Phone: 123-456-7890)',
            ],
            [
                'registration_number' => 'RL-12364',
                'beacon' => 'B-476',
                'survey_plan' => 'SP-2022-ADW',
                'deals' => 'Sale Agreement dated: 2023-06-10,
                Parties: Seller - John Doe (Phone: 123-456-7070),
                Buyer - Jane Smith (Phone: 987-654-1209),
                Sale Price: $150,000,
                Terms: Cash payment, transfer of ownership on full payment,
                ',
                'date_registered' => '2023-06-01',
                'owner' => 'Jane Smith (Phone: 987-654-5022)',
                'formerOwner' => 'John Doe (Phone: 123-456-0932)',
            ],
        ];
        foreach ($registeredLands as $key => $registeredLand) {
            Registered_Land::create($registeredLand);
        }
    }
}
