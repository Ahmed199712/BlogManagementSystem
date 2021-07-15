<?php

use Illuminate\Database\Seeder;
use App\Model\Tag;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $tag = new Tag;
        $tag->name = 'Programming';
        $tag->slug = 'programming';
        $tag->save();

        $tag2 = new Tag;
        $tag2->name = 'It';
        $tag2->slug = 'it';
        $tag2->save();

        $tag3 = new Tag;
        $tag3->name = 'Html';
        $tag3->slug = 'html';
        $tag3->save();

        $tag4 = new Tag;
        $tag4->name = 'Css';
        $tag4->slug = 'css';
        $tag4->save();

        $tag5 = new Tag;
        $tag5->name = 'PHP';
        $tag5->slug = 'php';
        $tag5->save();


        $tag6 = new Tag;
        $tag6->name = 'Laravel';
        $tag6->slug = 'laravel';
        $tag6->save();


        $tag7 = new Tag;
        $tag7->name = 'Wordpress';
        $tag7->slug = 'wordpress';
        $tag7->save();

        $tag8 = new Tag;
        $tag8->name = 'C#';
        $tag8->slug = 'c#';
        $tag8->save();


        $tag9 = new Tag;
        $tag9->name = 'Full Stack';
        $tag9->slug = 'full-stack';
        $tag9->save();

        $tag10 = new Tag;
        $tag10->name = 'Computer Science';
        $tag10->slug = 'computer-science';
        $tag10->save();

        $tag11 = new Tag;
        $tag11->name = 'Software';
        $tag11->slug = 'software';
        $tag11->save();

        $tag12 = new Tag;
        $tag12->name = 'C++';
        $tag12->slug = 'c++';
        $tag12->save();

        $tag13 = new Tag;
        $tag13->name = 'Java script';
        $tag13->slug = 'java-script';
        $tag13->save();


        $tag14 = new Tag;
        $tag14->name = 'ASP.NET';
        $tag14->slug = 'asp.net';
        $tag14->save();

    }
}
