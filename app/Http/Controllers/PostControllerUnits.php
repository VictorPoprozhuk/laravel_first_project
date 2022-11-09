<?php
//
//namespace App\Http\Controllers;
//
//use App\Models\Content;
//use App\Models\Post;
//use Illuminate\Http\Request;
//
//class PostController extends Controller
//{
//    public function index()
//    {
////      $posts = Post::find(1); // show element with id = 1
////      $posts = Post::where('is_published', 1)->get();
//        //show colections elements with is_published = 1)
////      $posts = Post::where('is_published', 1)->first();
//        //show first elem in colections elements with is_published = 1
//
//        $posts = Post::all(); // всі елементи показує
////        dump($posts);
//
////        foreach ($posts as $post) {
////            dump($post->title);
////        }
//
//
////        $content = Content::find(1);
////        dump($content->text_content);
//        // $str = 'string';
//        //var_dump($str);// показує тип і довжину
//        dd('end');
//    }
//
//    public function create()
//    {
//        $postsArr = [
//            [
//                'title' => 'title of post from phpStorm',
//                'content' => 'some interesting content',
//                'image' => 'imageBlala.jpg',
//                'likes' => 22,
//                'is_published' => 1
//            ], [
//                'title' => 'another of post from phpStorm',
//                'content' => 'another some interesting content',
//                'image' => 'anotherImageBlala.jpg',
//                'likes' => 122,
//                'is_published' => 1
//            ],
//        ];
////        Post::create([
////            'title' => 'another of post from phpStorm',
////            'content' => 'another some interesting content',
////            'image' => 'anotherImageBlala.jpg',
////            'likes' => 122,
////            'is_published' => 1
////        ]);
//        foreach ($postsArr as $item) {
//            Post::create($item);
//        }
//        dd('creeated_post');
//    }
//
//    public function update()
//    {
//        $post = Post::find(5);
//        $post->update([
//            'title' => 'updated ',
//            'content' => 'updated',
//            'image' => 'updated',
//            'likes' => 1222,
//            'is_published' => 1
//        ]);
//
//        dd('update');
//    }
//
//    public function delete()
//    {
////        $post = Post::find(5);
////        $post->delete(); //delete item with id = 5
//
//        $post = Post::withTrashed()->find(5);
//        $post->restore();
//
//        dd('delete');
//    }
//
//    // firstOrCreate перевіряє чи є такі item в бд
//    // updateOrCreate
//
//    public function firstOrCreate()
//    {
//        $post = Post::find(1);
//        $anotherPost = [
//            'title' => 'some post ',
//            'content' => 'some con',
//            'image' => 'someeeeee',
//            'likes' => 2,
//            'is_published' => 1
//        ];
//
//        $myPost = Post::firstOrCreate([
//            'title' => 'title of post ',
//        ], $anotherPost);
//        dump($post->content);
//        // перевіряє чи є в дб айтем з тайтлом title of post
//        // якшо є то присвоює той item в $post, якщо немає то добавляє в бд item $anotherPost)
//        dd('finished');
//    }
//
//    public function updateOrCreate()
//    {
//        $anotherPost = [
//            'title' => 'UPDATE ',
//            'content' => 'update some con',
//            'image' => 'update',
//            'likes' => 222,
//            'is_published' => 0
//        ];
//
//        $post = Post::updateOrCreate([
//            // перевіряє чи  в дб є тайтл з check,
//            // якщо є то апдейтить його, якщо немає то б віддає знайдений резульатт
//            'title' => 'check'
//        ], $anotherPost);
//        dump($post->content);
//        dd('update');
//    }
//}
