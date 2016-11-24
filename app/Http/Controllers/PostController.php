<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{

    /**
     * PostController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth',['except'=>'show']);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect('/');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create',
            [
                'categories' => Category::all(),
                'tags' => Tag::all(),
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'content' => 'required',
        ]);
        $ids = [];
        foreach ($request['tags'] as $tagName)
        {
            $tag = Tag::firstOrCreate(['name' => $tagName]);
            array_push($ids,$tag->id);

        }
        $post = Post::create(
            array_merge(
                $request->all(),
                ['user_id' => auth()->user()->id]
            )
        );

        $post->tags()->sync($ids);
        if ($post)
            return redirect('/')->with('success', '文章' . $request['name'] . '创建成功');
        else
            return redirect('/')->with('error', '文章' . $request['name'] . '创建失败');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('post.show',['post'=>$post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
