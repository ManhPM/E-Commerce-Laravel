<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['name' => 'Tên Phòng A'],
            ['name' => 'Tên Phòng B'],
            ['name' => 'Tên Phòng C'],
        ];

        foreach ($items as $item) {
            Room::create($item);
        }
    }
}
