<?php

use App\User;
use Illuminate\Database\Seeder;

/**
 * Class DatabaseSeeder
 */
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        //clear the current tables
        DB::table('users')->delete();
        DB::table('posts')->delete();

        //seed posts
        factory(\App\Post::class, 8)->create();

        //create a user we can login with
        User::create([
            'name' => 'Alex',
            'email' => 'alex13.nazarenco@gmail.com',
            'password' => bcrypt('123456')
        ]);
    }
}
