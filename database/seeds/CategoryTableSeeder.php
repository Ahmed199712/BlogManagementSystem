<?php

use Illuminate\Database\Seeder;
use App\Model\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category;
        $category->name = 'Backend Development';
        $category->slug = 'backend-development';
        $category->save();

        $category2 = new Category;
        $category2->name = 'Frontend Development';
        $category2->slug = 'frontend-development';
        $category2->save();

        $category3 = new Category;
        $category3->name = 'Android Development';
        $category3->slug = 'android-development';
        $category3->save();

        $category4 = new Category;
        $category4->name = 'iOS Development';
        $category4->slug = 'iOs-development';
        $category4->save();

        $category5 = new Category;
        $category5->name = 'Desktop Development';
        $category5->slug = 'desktop-development';
        $category5->save();

        $category6 = new Category;
        $category6->name = 'Artificial Intelligence';
        $category6->slug = 'artificial-intelligence';
        $category6->save();
    }
}
