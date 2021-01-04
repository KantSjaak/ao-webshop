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
            'updated_at' => Carbon\Carbon::now(),
            'description' => "Mooi, gaming scherm en met 144hz ziet alles er heel vloeind uit."
        ]);
        DB::table('products')->insert([
            'name' => 'LG UltraGear 27GL850 Zwart',
            'image_url' => 'https://tweakers.net/i/4kDvOo0EH4Ddt2P4XD_WaGCnoqs=/i/2002831778.jpeg',
            'category_id' => 1,
            'price' => 439.39,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);
        DB::table('products')->insert([
            'name' => 'Philips 276C8/00 Zwart',
            'image_url' => 'https://tweakers.net/i/R2Vb9V6hpyf4fQKHYHLh_p6yp9c=/i/2003236358.jpeg',
            'category_id' => 1,
            'price' => 289,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
            'description' => "27 inch, 4k, 75hz, ips paneel met maar slechts 4ms input vertraging"
        ]);
        DB::table('products')->insert([
            'name' => 'LG UltraGear 27GL850 Zwart',
            'image_url' => 'https://tweakers.net/i/4kDvOo0EH4Ddt2P4XD_WaGCnoqs=/i/2002831778.jpeg',
            'category_id' => 1,
            'price' => 439.39,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);
        DB::table('products')->insert([
            'name' => 'Asus TUF Gaming VG249Q Zwart',
            'image_url' => 'https://tweakers.net/i/UsQGzdYHHVmlpxSSsSHMnS9L-ok=/i/2003257344.jpeg',
            'category_id' => 1,
            'price' => 179,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
            'description' => "Mooi, gaming scherm en met 144hz ziet alles er heel vloeind uit."
        ]);

        //this seeds the keyboards
        DB::table('products')->insert([
            'name' => 'Corsair K63 Cherry MX Red',
            'image_url' => 'https://tweakers.net/i/M8kNoF2QSxS9pJdgXqp35NnmYYk=/i/2002678252.jpeg',
            'category_id' => 2,
            'price' => 84.90,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);
        DB::table('products')->insert([
            'name' => 'Corsair Gaming K55 RGB',
            'image_url' => 'https://tweakers.net/i/pD9s50wi-PuVdhYFV0Z9M9YSFdY=/fit-in/1280x/filters:strip_exif()/i/2001301967.png?f=imagegallery',
            'category_id' => 2,
            'price' => 54.90,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);
        DB::table('products')->insert([
            'name' => 'Corsair K70 MK.2 Cherry MX Red',
            'image_url' => 'https://tweakers.net/i/bfxxIH3nOMVNKwj0F3Uzx0GiW30=/fit-in/1280x/filters:strip_exif()/i/2002033195.png?f=imagegallery',
            'category_id' => 2,
            'price' => 149,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);

        //this seeds the mice
        DB::table('products')->insert([
            'name' => 'Logitech G502 Hero',
            'image_url' => 'https://tweakers.net/i/j8YTz3Qxp3K4Ay7UzLrCdbyhDKI=/fit-in/188x141/filters:strip_icc():fill(white):strip_exif()/i/2002206035.jpeg?f=thumblarge',
            'category_id' => 3,
            'price' => 49.59,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);
        DB::table('products')->insert([
            'name' => 'Logitech MX Master 3 Grafiet',
            'image_url' => 'https://tweakers.net/i/atKTUDM7yQ7W0TSj2Ay4LMhdPa8=/i/2003046784.png',
            'category_id' => 3,
            'price' => 96.99,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);
        DB::table('products')->insert([
            'name' => 'Razer Deathadder V2',
            'image_url' => 'https://assets3.razerzone.com/U-v0ztWgvi4yWGLZbvyOW6dW5oA=/1500x1000/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fh61%2Fhed%2F9086247927838%2FdeathadderV2pro-gallery-1500x1000-img7.jpg',
            'category_id' => 3,
            'price' => 51.01,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);

        //this seeds the headphones
        DB::table('products')->insert([
            'name' => 'Sony WH-1000XM3 (Zwart)',
            'image_url' => 'https://tweakers.net/i/HxSt2qeYsBamNSmQxrLtoQ4uh-w=/i/2002180389.jpeg',
            'category_id' => 4,
            'price' => 229,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);
        DB::table('products')->insert([
            'name' => 'JBL Tune 500BT (Zwart)',
            'image_url' => 'https://tweakers.net/i/lpdzyyCutpGLBfhZpZJ6P1WAbxc=/fit-in/188x141/filters:strip_icc():fill(white):strip_exif()/i/2002211905.jpeg?f=thumblarge',
            'category_id' => 4,
            'price' => 33,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);
        DB::table('products')->insert([
            'name' => 'JBL Live 650BTNC (Zwart)',
            'image_url' => 'https://tweakers.net/i/kBSB1iFWXH7TBj3WEEZ010SkJ-Q=/fit-in/188x141/filters:fill(white):strip_exif()/i/2002531974.png?f=thumblarge',
            'category_id' => 4,
            'price' => 116,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);

        //this seeds the towers
        DB::table('products')->insert([
            'name' => 'Apple Mac Mini 2020 M1',
            'image_url' => 'https://tweakers.net/i/LYIfsazVtyxvBkItvOJ-byOukHI=/fit-in/188x141/filters:strip_icc():fill(white):strip_exif()/i/2003991520.jpeg?f=thumblarge',
            'category_id' => 5,
            'price' => 789,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
            'description' => '8GB ram, 256GB ssd'
        ]);
        DB::table('products')->insert([
            'name' => 'Medion Erazer Engineer P10',
            'image_url' => 'https://tweakers.net/i/lfqcjyIONFP1-GfxDCODB9OFcg4=/fit-in/188x141/filters:strip_icc():fill(white):strip_exif()/i/2003829684.jpeg?f=thumblarge',
            'category_id' => 5,
            'price' => 892.62,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);
        DB::table('products')->insert([
            'name' => 'HP Pavilion TG01-0000nd',
            'image_url' => 'https://tweakers.net/i/ZDwDb3dR9wHFDati68Kn9tQeaZE=/fit-in/188x141/filters:strip_icc():fill(white):strip_exif()/i/2003146108.jpeg?f=thumblarge',
            'category_id' => 5,
            'price' => 741.73,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
            'description' => 'Tower/desktop met Ryzen 5 3500 en 8GB ram'
        ]);
    }
}
