<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use App\Comment;
use App\Post;
use Auth;
use Session;
use DB;

class CommentsController extends Controller
{

    public function __construct()
{
    $this->middleware('auth', ['except' => 'store']);
}


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $post_id)
    {
        $this->validate($request, array(

            'comment' => 'required|min:5|max:2000',
        ));

         
        $post = Post::find($post_id);
         
        $comment = new Comment();
        $comment->username = Auth::user()->username;
        $comment->email = Auth::user()->email;
        $comment->user_id = Auth::user()->id;
        $comment->comment = $request->comment;
        $comment->image = Auth::user()->profile->image;
        $comment->approved = true;
        $comment->post()->associate($post);

        $comment->save();


        Session::flash('message', "Message posted successfully!");



        return Redirect::back();
  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comment = Comment::find($id);
        return view ('comments.edit')->withComment($comment);
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
        $comment = Comment::find($id);

        $this->validate($request, array('comment' => 'required'));

        $comment->comment = $request->comment;
        $comment->save();

        Session::flash('success', 'Comment updated');

         
        return redirect('/post/' . $comment->post->id);
    }
    public function delete($id){

        DB::table('comments')->where('id',$id)->delete();

        Session::flash('remove', "Post was successfully removed!");


   

       return Redirect::back();
    }

    public function deleteMyComment($id){

        DB::table('comments')->where('id',$id)->delete();

       return Redirect::back();
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
