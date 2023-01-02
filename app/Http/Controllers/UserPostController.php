<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $userID = Auth::user()->id; 
        // $posts = DB::select('select * from post where user_id = ?', [$userID]);
        // $categories=Category::get();
        // // $posts=Post::where('user_id', $userID)->get();
        // return view('dashboard',['posts'=>$posts,'categories'=>$categories]);

        $userID = Auth::user()->id; 
        $posts = DB::select('select * from post where user_id = ?', [$userID]);
        $categories=Category::all();
        return view('dashboard',compact('posts','categories'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        // $post=Post::find($request->id);
        // $categories=Category::get();
        // return view('dashboard_update_ad',['post'=>$post,'categories'=>$categories]);

        $post=Post::find($request->id);
        $categories=Category::all();
        return view('dashboard_update_ad',compact('post','categories'));

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
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($post)
    {
        $post->delete();
    }



}
