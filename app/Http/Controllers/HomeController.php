<?php

//this is only use single action controller

namespace App\Http\Controllers;

use App\Models\MyPost;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Migrations\StatusCommand;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        $post = Post::create([
            'title' => 'this is from mass assignment',
            'description' => 'this is a mass assignment',
            'status' => 1,
            'publish_date' => date('Y-m-d'),
            'user_id' => 1,
            'category_id' => 2,
            'views' => 500
        ]);

        dd('Success');

    }
}
        //update() to update the posts content in database
        // return DB::table('posts')->where('id', 52)->update([
        //     'title' => 'test data'
        // ]);

        //get() retrieve the data from the database
        //return DB::table('posts')->get();

        //find() to find the data from the database
        //return DB::table('posts')->find(16);

        //delete() data from the database
        //return DB::table('posts')->delete(53);

        //insert() data from the database
        // return DB::table('posts')->insert([
        //     'title' => 'test data',
        //     'description' => 'Lorem ipsum dolor sit',
        //     'status' => 1,
        //     'category_id' => 1,
        //     'publish_date' => date('Y-m-d'),
        //     'user_id' => 1,
        // ],
        // );

        //join table
        // return DB::table('posts')
        // ->join('category', 'posts.category_id', '=','category.id')
        // ->select('posts.*')
        // ->get();

        /**
         * count()
         * max()
         * min()
         * avg()
         * sum()
         */
        // return DB::table('posts')->average('views');

        // return $posts = MyPost::all(); // get all posts

        //return MyPost::all(); //DB::table('posts')->get();

        //findOrFail() if the data is not exist will show a 404 error
        //return MyPost::findOrFail(3);

        //$posts = MyPost::all();
        // foreach ($posts as $post){
        //     echo $post->title;
        // }

        // retrieve the specific conditon database instance
        // return MyPost::where('views', '>', 100)->get();


        // $post = new MyPost();
        // $post->title = 'new post';
        // $post->description = 'this is new post for you';
        // $post->status = '1';
        // $post->publish_date = date('Y-m-d');
        // $post->user_id = 1;
        // $post->category_id = 2;
        // $post->views = 1430;
        // $post->save();

        // $post = MyPost::where('id', 1)->first(); //collection
        // $post->title = "Hello My name is IOS";
        // $post->save();

        //find specific post to delete post
        //MyPost::find(3)->delete();
