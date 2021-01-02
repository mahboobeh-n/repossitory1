<?php

use App\Article;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        Article::truncate();

          factory(Article::class,2)->create()->each(function ($article)
           {
            $article->categories()->save(factory(App\Category::class)->make());
           });

    }
}

