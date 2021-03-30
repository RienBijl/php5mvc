<?php

namespace Database\Seeders;

use App\Models\Band;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('bands')->insert([
               'name' => Str::random(10),
               'description' => Str::random(10),
               'biography' => Str::random(10),
               'header' => null,
               'text_color' => null,
               'background_color' => null
            ]);
        }
    }
}
