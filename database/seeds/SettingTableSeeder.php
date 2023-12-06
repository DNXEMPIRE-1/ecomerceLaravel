<?php

use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=array(
            'description'=>"Oil ",
            'short_des'=>"Nothing Much",
            'photo'=>"blog.jpeg",
            'logo'=>'logo.png',
            'address'=>"NO. 342 - Siwaka, Madaraka",
            'email'=>"chuks@gmail.com",
            'phone'=>"+25411101110",
        );
        DB::table('settings')->insert($data);
    }
}
