<?php

use Illuminate\Database\Seeder;
use App\Model\Setting;


class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $setting = new Setting;
        $setting->site_name = 'MiniBlog';
        $setting->site_desc = 'MiniBlog Description';
        $setting->site_email = 'miniblog@gmail.com';
        $setting->site_address = 'Alexandria , Egypt';
        $setting->site_phone = '01245874587';
        $setting->facebook = 'https://www.facebook.com';
        $setting->youtube = 'https://www.youtube.com';
        $setting->twitter = 'https://www.twitter.com';
        $setting->save();
    }
}
