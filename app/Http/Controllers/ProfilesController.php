<?php
namespace App\Http\Controllers;
use App\User;
use App\Post;
use Auth;
use DB;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Intervention\Image\Facades\Image;
class ProfilesController extends Controller
{
    public function index(User $user)
    {
        $follows = (auth()->user()) ? auth()->user()->following->contains($user->id) : false;
        
        $postCount = Cache::remember(
            'count.posts.' . $user->id,
            now()->addSeconds(10),
            function () use ($user) {
                return $user->posts->count();
            });
        $followersCount = Cache::remember(
            'count.followers.' . $user->id,
            now()->addSeconds(10),
            function () use ($user) {
                return $user->profile->followers->count();
            });
        $followingCount = Cache::remember(
            'count.following.' . $user->id,
            now()->addSeconds(10),
            function () use ($user) {
                return $user->following->count();
            });
        return view('profiles.index', compact('user', 'follows', 'postCount', 'followersCount', 'followingCount'));
    }
    public function edit(User $user)
    {
        $this->authorize('update', $user->profile);
        return view('profiles.edit', compact('user'));
    }

  

   
    public function update(User $user)
    {
        $this->authorize('update', $user->profile);
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'url',
            'image' => '',
            'function' => '',
            'company' => '',
            'location' => '',
            'facebook' => '',
            'instagram' => '',
            'twitter' => '',
            'pinterest' => '',
        ]);
        if (request('image')) {
            $imagePath = request('image')->store('profile', 'public');
            $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000, 1000);
            $image->save();
            $imageArray = ['image' => $imagePath];
        }
        auth()->user()->profile->update(array_merge(
            $data,
            $imageArray ?? []
        ));
        return redirect("/profile/{$user->id}");
    }

   /* public function delete($id)
    {
        if(Auth::user()->id == $id){
        DB::table('users')->where('id',$id)->delete();
    Session::flash('remove', "The profile was successfully deleted!");
        return redirect('login');
    }  
     Session::flash('remove', "blahh");
        return redirect('register');
       
    
    } */

    public function delete($id)
{
   $profile = User::find($id);
   $profile->posts()->delete();

   $profile->delete();
   Session::flash('remove', "The profile was successfully deleted!");
   return redirect('login');
}


}