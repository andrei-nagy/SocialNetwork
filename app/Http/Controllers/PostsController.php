<?php

namespace App\Http\Controllers;

use App\Post;
use App\Tag;
use App\User;
use App\Comment;
use Session;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{

	public function __construct(){
		$this->middleware('auth');
	}

    public function index(){
        $users = auth()->user()->following()->pluck('profiles.user_id');
        $posts = Post::whereIn('user_id', $users)->with('user')->latest()->paginate(10);
       
        $user = User::limit(10)->latest()->get();
        
        
        return view('posts.index', compact('posts'), compact('user'));
    }
	

 public function delete($id){

    if(!DB::table('posts')->where('id',$id)->where('user_id',auth()->user()->id)->delete()){
        Session::flash('remove', "You do not have permission to delete the post!");
    }

     Session::flash('success', "The post was successfully removed!");

   return redirect('/profile/' . auth()->user()->id);
}


    public function create(){

        $tags = Tag::all();

    	return view('posts.create')->withTags($tags);
    }

    public function search(Request $request)
    {
        $request->validate([
            'query' => 'required|min:3'
        ]);

        $query = $request->input('query');

        $posts = Post::where('caption', 'like', "%$query%")->paginate(10);

        $users = User::where('username', 'like', "%$query%")->paginate(10);

        $tags = Tag::where('name', 'like', "%$query%")->paginate(10);
      return view('posts.search-results')->with('posts', $posts)->with('users', $users)->with('tags', $tags);
    }


    public function store(Request $request )
    {

       

    	$data = request()->validate([

    		'caption' => 'required|max:255',
    		'image' => 'required|image',
    	]);
    $imagePath = request('image')->store('uploads', 'public');

    	$image = Image::make(public_path("storage/{$imagePath}"))->fit(1600, 1100);
    	$image->save();

    	 

        $post = new Post;
      
        $post = auth()->user()->posts()->create([
        'caption' => $data['caption'],
        'image' => $imagePath,
    ]);

        $post->save();

        $post->tags()->sync($request->tags, false);
      
     return redirect('/profile/' . auth()->user()->id);
    }

    public function show(\App\Post $post){

    	return view('posts.show', compact('post'));
    }

    public function editPost($id){

   $post = Post::find($id);

   $tags = Tag::all();
   $tags2 = array();
   foreach($tags as $tag){
        $tags2[$tag->id] = $tag->name;
   }


   return view ('posts.editPost')->withPost($post)->withTags($tags2);
}
    public function update(Request $request, $id)
    {
        $post = Post::find($id);

        $this->validate($request, array('caption' => 'required'));

        $post->caption = $request->caption;
        $post->save();

        $post->tags()->sync($request->tags, true);

        Session::flash('success', 'Post updated');

         return redirect('/post/' . $post->id);
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->tags()->detach();

        $post->delete();

        Session::flash('success', 'The post was successfully removed!');
        return redirect()->route('posts.index');
    }
}
