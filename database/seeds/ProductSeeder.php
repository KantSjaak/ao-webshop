<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //this seeds the monitors
        DB::table('products')->insert([
            'name' => 'Asus TUF Gaming VG249Q Zwart',
            'image_url' => 'https://tweakers.net/i/UsQGzdYHHVmlpxSSsSHMnS9L-ok=/i/2003257344.jpeg',
            'category_id' => 1,
            'price' => 179,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('products')->insert([
            'name' => 'LG UltraGear 27GL850 Zwart',
            'image_url' => 'https://tweakers.net/i/4kDvOo0EH4Ddt2P4XD_WaGCnoqs=/i/2002831778.jpeg',
            'category_id' => 1,
            'price' => 439.39,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('products')->insert([
            'name' => 'Philips 276C8/00 Zwart',
            'image_url' => 'https://tweakers.net/i/R2Vb9V6hpyf4fQKHYHLh_p6yp9c=/i/2003236358.jpeg',
            'category_id' => 1,
            'price' => 289,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);

        //this seeds the keyboards
        DB::table('products')->insert([
            'name' => 'Corsair K63 Compact Mechanical Gaming - Cherry MX Red (US)',
            'image_url' => 'https://tweakers.net/i/M8kNoF2QSxS9pJdgXqp35NnmYYk=/i/2002678252.jpeg',
            'category_id' => 2,
            'price' => 84.90,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('products')->insert([
            'name' => 'Corsair Gaming K55 RGB (Qwerty US)',
            'image_url' => 'https://tweakers.net/i/pD9s50wi-PuVdhYFV0Z9M9YSFdY=/fit-in/1280x/filters:strip_exif()/i/2001301967.png?f=imagegallery',
            'category_id' => 2,
            'price' => 54.90,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
        DB::table('products')->insert([
            'name' => 'Corsair K70 RGB MK.2 (Cherry MX Red, US)',
            'image_url' => 'https://tweakers.net/i/bfxxIH3nOMVNKwj0F3Uzx0GiW30=/fit-in/1280x/filters:strip_exif()/i/2002033195.png?f=imagegallery',
            'category_id' => 2,
            'price' => 149,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
        ]);
    }
}
