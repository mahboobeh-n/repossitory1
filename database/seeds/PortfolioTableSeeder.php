<?php

use App\frontmodels\Portfolio;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class PortfolioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('portfolios')->truncate();

        Portfolio::create(['name' => 'جراحی', 'link' => 'http:/google.com', 'description' => 'پیوند مغز استخوان و سلول های بنیادی برای درمان سرطان', 'image' => ('29682C.jpg'), 'tag' => 'جراحی']);
        Portfolio::create(['name' => 'رادیولوژی', 'link' => 'http:/google.com', 'description' => 'به ساختار بدن موجودات زنده آناتومی گفته می­‌شود.', 'image' => ('1606548853.jpg'), 'tag' => 'رادیولوژی']);
        Portfolio::create(['name' => 'داخلی', 'link' => 'http:/google.com', 'description' => 'پوکی استخوان ؛ علل، علائم، تشخیص و درمان', 'image' => ('3404033.jpg'), 'tag' => 'داخلی']);
        Portfolio::create(['name' => 'عفونی', 'link' => 'http:/google.com', 'description' => 'آزمایش T3 ؛ کاربرد، آمادگی و تفسیر نتایج', 'image' => ('unnamed3.jpg'), 'tag' => 'عفونی']);
        Portfolio::create(['name' => 'قلب', 'link' => 'http:/google.com', 'description' => 'آشنایی با بیماری‌های قلب و عروق', 'image' => ('6.jpg'), 'tag' => 'قلب']);
//        Portfolio::create(['name' => 'mina', 'link' => 'http:/google.com', 'description' => 'kkkk', 'image' => ('1.jpeg'), 'tag' => 'h']);

    }
}

