<?php

use Illuminate\Database\Seeder;
use App\Model\About;

class AboutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $about = new About;
        $about->title = 'Ahmed Ahmed';
        $about->content = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus corrupti facilis officiis impedit, suscipit enim quaerat quia, aut alias sapiente, asperiores cum repudiandae! Labore fugit molestias molestiae minima, dolore dolor.';
        $about->facebook = 'https://www.facebook.com';
        $about->twitter = 'https://www.twitter.com';
        $about->google = 'https://www.google.com';
        $about->youtube = 'https://www.youtube.com';
        $about->save();

        $about1 = new About;
        $about1->title = 'Mohamed Mohamed';
        $about1->content = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus corrupti facilis officiis impedit, suscipit enim quaerat quia, aut alias sapiente, asperiores cum repudiandae! Labore fugit molestias molestiae minima, dolore dolor.';
        $about1->facebook = 'https://www.facebook.com';
        $about1->twitter = 'https://www.twitter.com';
        $about1->google = 'https://www.google.com';
        $about1->youtube = 'https://www.youtube.com';
        $about1->save();
    }
}
