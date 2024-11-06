<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Image;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Развитие искусственного интеллекта',
            'Этика ИИ',
            'Автоматизация и роботизация',
            'Применение ИИ в медицине',
            'Образование и ИИ',
            'Нейросети и глубокое обучение',
            'Искусственный интеллект в бизнесе',
            'Регулирование ИИ',
            'Искусственный интеллект в искусстве и творчестве',
            'Будущее ИИ',
        ];

        foreach ($categories as $category) {
            Category::create(['title' => $category]);
        }
    }
}
