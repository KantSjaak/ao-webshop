<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Categories')->insert([
            'name' => 'Monitors',
            'image_url' => 'https://www.megekko.nl/catimg/2071.png',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('Categories')->insert([
            'name' => 'Keyboards',
            'image_url' => 'https://www.megekko.nl/catimg/2162.png',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('Categories')->insert([
            'name' => 'Mice',
            'image_url' => 'https://www.megekko.nl/catimg/2163.png',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('Categories')->insert([
            'name' => 'Headphones',
            'image_url' => 'https://www.megekko.nl/catimg/2179.png',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('Categories')->insert([
            'name' => 'Desktop Towers',
            'image_url' => 'https://tweakers.net/i/LGohwHV_61bQDX-3m5X9rT5mm0Q=/fit-in/x800/filters:strip_icc():strip_exif()/i/2003829684.jpeg?f=imagegallery',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
    }
}
