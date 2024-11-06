<?php
namespace Database\Seeders;

use App\Models\Image;
use App\Models\News;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
    * Run the database seeds.
    */
    public function run(): void
    {
        $news = News::factory(100)->create();  // Создаем 100 новостей

        foreach($news as $oneNews) {
            $images = Image::inRandomOrder()->take(2)->get();

            $oneNews->images()->attach($images->pluck('id')->toArray());
        }
    }
}
