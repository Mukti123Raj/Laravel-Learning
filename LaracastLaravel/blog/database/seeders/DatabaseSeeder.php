<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $user = User::factory()->create([
            'name' => 'Test User',

        ]);
        Post::factory(5)->create([
            'user_id' => $user->id, // make sure this is all lowercase
        ]);
        // $user =User::factory()->create();

        // User::factory()->create([
        //     'name' => 'Test User', // changed from 'username' to 'name'
        //     'email' => 'test@example.com',
        // ]);

        // $personal = Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'Personal',
        // ]);

        // $family = Category::create([
        //     'name' => 'Family',
        //     'slug' => 'family',
        // ]);
        // $work =Category::create([
        //     'name' => 'Wok  r',
        //     'slug' => 'Work',
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $family->id,
        //     'title' => 'My First Post',
        //     'slug' => 'my-first-post',
        //     'excerpt' => '<p>This is the excerpt of my second post</p>.',
        //     'body' => '<p>This is the body of my second post. It contains more detailed information about another topic I am writing about. I hope you find it informative and engaging .Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti debitis quaerat tempora quidem est quibusdam illum, totam esse voluptates, earum quae iure consectetur atque, incidunt cum aliquid odio! Incidunt harum aut et officia debitis. Sequi animi delectus velit doloremque culpa aut numquam consequuntur officiis, at distinctio, qui nulla, nihil praesentium molestias saepe eos. Aliquam excepturi necessitatibus maiores numquam corporis officiis nihil, fugiat blanditiis debitis quaerat a corrupti! Maiores earum autem iure consectetur eligendi? Ipsam et veritatis nesciunt ipsum qui enim, distinctio consequatur harum. Magni, quaerat sapiente iste alias aut quasi error. Soluta voluptates numquam autem beatae alias? Suscipit, ab dicta!</p>'
        // ]);
        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $personal->id,
        //     'title' => 'My Second Post',
        //     'slug' => 'my-second-post',
        //     'excerpt' => '<p>This is the excerpt of my second post</p>.',
        //     'body' => '<p>This is the body of my second post. It contains more detailed information about another topic I am writing about. I hope you find it informative and engaging .Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti debitis quaerat tempora quidem est quibusdam illum, totam esse voluptates, earum quae iure consectetur atque, incidunt cum aliquid odio! Incidunt harum aut et officia debitis. Sequi animi delectus velit doloremque culpa aut numquam consequuntur officiis, at distinctio, qui nulla, nihil praesentium molestias saepe eos. Aliquam excepturi necessitatibus maiores numquam corporis officiis nihil, fugiat blanditiis debitis quaerat a corrupti! Maiores earum autem iure consectetur eligendi? Ipsam et veritatis nesciunt ipsum qui enim, distinctio consequatur harum. Magni, quaerat sapiente iste alias aut quasi error. Soluta voluptates numquam autem beatae alias? Suscipit, ab dicta!</p>'
        // ]);
        //         Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $personal->id,
        //     'title' => 'My Third Post',
        //     'slug' => 'my-Third-post',
        //     'excerpt' => '<p>This is the excerpt of my Third post</p>.',
        //     'body' => '<p>This is the body of my Third post. It contains more detailed information about another topic I am writing about. I hope you find it informative and engaging .Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti debitis quaerat tempora quidem est quibusdam illum, totam esse voluptates, earum quae iure consectetur atque, incidunt cum aliquid odio! Incidunt harum aut et officia debitis. Sequi animi delectus velit doloremque culpa aut numquam consequuntur officiis, at distinctio, qui nulla, nihil praesentium molestias saepe eos. Aliquam excepturi necessitatibus maiores numquam corporis officiis nihil, fugiat blanditiis debitis quaerat a corrupti! Maiores earum autem iure consectetur eligendi? Ipsam et veritatis nesciunt ipsum qui enim, distinctio consequatur harum. Magni, quaerat sapiente iste alias aut quasi error. Soluta voluptates numquam autem beatae alias? Suscipit, ab dicta!</p>'
        // ]);
    }
}
