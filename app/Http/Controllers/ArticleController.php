<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $userId = $user->id;
        
        $articles = DB::table('articles')
            ->where('user_id', $userId)
            ->select('id', 'title', 'thumbnail', 'description')
            ->get();
        
        $viewData = [
            'articles' => $articles,
            'user' => $user,
        ];
        
        return view('profile', $viewData);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('write');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $title = $request->input('title');
        $description = $request->input('description');
        $content = $request->input('content');
        $user_id = auth()->user()->id;
        // Thumbnail
        $thumbnail = $request->file('thumbnail');
        $thumbnailName = uniqid() . '.' . $thumbnail->getClientOriginalExtension();
        $thumbnail->move(public_path('thumbnails'), $thumbnailName);


        DB::table('articles')->insert([
            'thumbnail' => $thumbnailName,
            'title' => $title,
            'description' => $description,
            'content' => $content,
            'user_id' => $user_id,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);

        return redirect('/profile');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = DB::table('articles')
                        ->select('id', 'title','content' ,'thumbnail', 'description', 'created_at')
                        ->where('id','=',$id)
                        ->first();
        $view_data = [
            'article' => $article
        ];

        return view('article', $view_data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = DB::table('articles')
                        ->select('id', 'title','content' ,'thumbnail', 'description', 'created_at')
                        ->where('id','=',$id)
                        ->first();
        $view_data = [
            'article' => $article
        ];

        return view('edit', $view_data);
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
        $title = $request->input('title');
        $description = $request->input('description');
        $content = $request->input('content');

        DB::table('articles')
            ->where('id','=',$id)
            ->update([
                'title' => $title,
                'description' => $description,
                'content' => $content,
                'updated_at' => date('Y-m-d H:i:s'),
            ]);

        return redirect("article/{$id}");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('articles')
            ->where('id',$id)
            ->delete();

        return redirect("profile");
    }
}
