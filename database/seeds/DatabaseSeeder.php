<?php

use Illuminate\Database\Seeder;

use App\Article;
use App\History;
use App\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(Article::class, 25)->create();
        factory(History::class, 25)->create();
        factory(User::class, 25)->create();
        
       
    }
}
