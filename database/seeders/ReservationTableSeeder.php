<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ReservationTable;

class ReservationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
   
        ReservationTable::factory()->times(10)->create();
    }
}
