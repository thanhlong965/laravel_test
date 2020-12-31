<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(userSeeder::class);
    }
}
class userSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            ['name'=>'Phu','email'=>str_random(3).'@gmail.com','password'=>bcrypt('matkhau')],
            ['name'=>'Long','email'=>str_random(3).'@gmail.com','password'=>bcrypt('matkhau')],
            ['name'=>'Thanh','email'=>str_random(3).'@gmail.com','password'=>bcrypt('matkhau')]
        ]);
    }
}
