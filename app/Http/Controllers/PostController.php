<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
//      $posts = Post::find(1); // show element with id = 1
//      $posts = Post::where('is_published', 1)->get();
        //show collections elements with is_published = 1)
//      $posts = Post::where('is_published', 1)->first();
        //show first elem in collections elements with is_published = 1

        // $posts = Post::all(); // всі елементи показує
//        dump($posts);

//        foreach ($posts as $post) {
//            dump($post->title);
//        }


//        $content = Content::find(1);
//        dump($content->text_content);
        // $str = 'string';
        //var_dump($str);// показує тип і довжину


        $posts = Post::all();

        return view('post.index', compact('posts'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string'
        ]);
        Post::create($data);

        return redirect()->route('post.index');
    }

//    public function show($id)
//    {
//        $post = Post::findOrFail($id);
//
//        dd($post->title);
//    }

    public function show(Post $post)
    {
// теж саме що і з верху, тільки лара робить перевірку за нас чи є пост з таким id
// писати потрібно саме в такому стилі
        return view('post.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('post.edit', compact('post'));

    }

    public function update(Post $post)
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string'
        ]);
        $post->update($data);

        return redirect()->route('post.show', $post->id);

    }

    public function delete()
    {
//        $post = Post::find(5);
//        $post->delete(); //delete item with id = 5

        $post = Post::find(3);
        $post->restore();

        dd('delete');
    }

    // firstOrCreate перевіряє чи є такі item в бд
    // updateOrCreate

    public function firstOrCreate()
    {
        $post = Post::find(1);
        $anotherPost = [
            'title' => 'some post ',
            'content' => 'some con',
            'image' => 'some',
            'likes' => 2,
            'is_published' => 1
        ];

        $myPost = Post::firstOrCreate([
            'title' => 'title of post ',
        ], $anotherPost);
        dump($post->content);
        // перевіряє чи є в дб айтем з тайтлом title of post
        // якшо є то присвоює той item в $post, якщо немає то добавляє в бд item $anotherPost)
        dd('finished');
    }

    public function updateOrCreate()
    {
        $anotherPost = [
            'title' => 'UPDATE ',
            'content' => 'update some con',
            'image' => 'update',
            'likes' => 222,
            'is_published' => 0
        ];

        $post = Post::updateOrCreate([
            // перевіряє чи  в дб є тайтл з check,
            // якщо є то апдейтить його, якщо немає то б віддає знайдений резульатт
            'title' => 'check'
        ], $anotherPost);
        dump($post->content);
        dd('update');
    }
}
