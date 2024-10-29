<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Checkinout;
use App\Models\User;

class CheckinoutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Checkinout::create([
            'user_id' => 2,
            'checkin_time' => '2024-10-29 11:00:43',
            'checkout_time' => '2024-10-29 11:01:05',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Checkinout::create([
            'user_id' => 7,
            'checkin_time' => '2024-10-28 17:08:41',
            'checkout_time' => '2024-10-28 17:08:45',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Checkinout::create([
            'user_id' => 4,
            'checkin_time' => '2024-10-28 16:51:42',
            'checkout_time' => '2024-10-28 16:51:48',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Checkinout::create([
            'user_id' => 2,
            'checkin_time' => '2024-10-28 15:27:32',
            'checkout_time' => '2024-10-28 15:27:44',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Checkinout::create([
            'user_id' => 6,
            'checkin_time' => '2024-10-26 23:00:44',
            'checkout_time' => '2024-10-26 23:00:48',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Checkinout::create([
            'user_id' => 2,
            'checkin_time' => '2024-10-26 22:58:56',
            'checkout_time' => '2024-10-26 22:59:49',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Checkinout::create([
            'user_id' => 2,
            'checkin_time' => '2024-10-26 08:28:17',
            'checkout_time' => '2024-10-26 08:28:38',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Checkinout::create([
            'user_id' => 2,
            'checkin_time' => '2024-10-08 08:21:44',
            'checkout_time' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Checkinout::create([
            'user_id' => 2,
            'checkin_time' => '2024-10-15 08:20:55',
            'checkout_time' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Checkinout::create([
            'user_id' => 2,
            'checkin_time' => '2024-10-24 08:19:31',
            'checkout_time' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Checkinout::create([
            'user_id' => 2,
            'checkin_time' => '2024-10-25 08:13:06',
            'checkout_time' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Checkinout::create([
            'user_id' => 3,
            'checkin_time' => '2024-10-25 22:17:16',
            'checkout_time' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    
    }
}
