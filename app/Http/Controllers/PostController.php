<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DateTime;

use App\Http\Controllers\SlugController as SlugController;  
use App\Http\Controllers\ImageUploadController;
use App\Post;

class PostController extends SlugController
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $published_posts = Post::where('status','=',1)->count();

        if($published_posts > 3)
        {
            $recent_posts = Post::where('status','=',1)
                            ->orderBy('id', 'desc')
                            ->take(3)
                            ->get();

            $posts = Post::where('status','=',1)
                    ->where('id', '<>', $recent_posts[0]->id)
                    ->where('id', '<>', $recent_posts[1]->id)
                    ->where('id', '<>', $recent_posts[2]->id)
                    ->orderBy('id', 'desc')
                    ->paginate(10);
        }

        else 
        {
            $posts = Post::where('status','=',1)
                        ->orderBy('id', 'desc')
                        ->paginate(10);  
            $recent_posts = [];
        }

        $featured_posts = Post::where('status','=',1)
                        ->where('featured','=',1)
                        ->orderBy('id', 'desc')
                        ->orderBy('id', 'desc')
                        ->get();
                        
        return view('blog.index', compact('posts', 'recent_posts', 'featured_posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home.posts.create');
    }

   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = request()->validate([
            'title' => 'required|unique:posts',
            'content' => 'required',
            'image' => 'image|required|mimes:jpeg,png,jpg,gif,svg'
        ]);
        $imgUploader = new ImageUploadController;
        $imgPaths = $imgUploader->postImageUpload($input['image']);
        $imageArray = ['image' => $imgPaths];

        $slug = $this->createSlug($request->input('title'));
        $excerpt = substr($input['content'], 0, 200);
        if($request->input('submit') === 'publish')
        {
            $published_at = new DateTime();
            $status = 1; 
        } 
        else 
        {
            $published_at = NULL;
            $status = 0;
        }
        $featured = 0;
        $data = array_merge($input, $imageArray);
        auth()->user()->posts()->create([
            'title' => $data['title'],
            'slug' => $slug,
            'excerpt' => $excerpt,
            'content' => $data['content'],
            'image' => $data['image'],
            'status' => $status,
            'featured' => $featured,
            'published_at' => $published_at
        ]);
        return redirect()->route('post.create')->with("success","Post created successfully!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('blog.post', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('home.posts.edit', compact('post'));
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
        $data = request()->validate([
            'title' => 'required|unique:posts,title,'.$id,              
            'content' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg'
        ]);

        $post = Post::findOrFail($id);

        if($request->hasFile('image')) 
        {
            $imgUploader = new ImageUploadController;
            $imgPaths = $imgUploader->postImageUpload($data['image']);
            $imageArray = ['image' => $imgPaths];
        }
        else
        {
            $imageArray = ['image' =>$post->image];
        }

        $slug = $this->createSlug($request->input('title'));
        $excerpt = substr($data['content'], 0, 200);
        if($request->input('submit') === 'publish')
        {
            $published_at = new DateTime();
            $status = 1; 
        } 
        else 
        {
            $published_at = NULL;
            $status = 0;
        }
        $updated_at = new DateTime();
        $request->has('feature') ? $featured = 1 : $featured = 0;
           
        $post->title = $data['title'];
        $post->slug = $slug;
        $post->excerpt = $excerpt;
        $post->content = $data['content'];
        $post->status = $status;
        $post->featured = $featured;
        $post->published_at = $published_at;
        $post->image = $imageArray['image'];
        //$post->updated_at = $updated_at;
        $post->save();
        return redirect()->route('post.create'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Auth::user();
        if($user->hasRole('superadministrator|administrator|editor')) 
        {
            Post::find($id)->delete();
            return response()->json(['success'=>'Post deleted successfully.']);
        }
        else 
            return response()->json(['success'=>'Action not authorized.']);
    }
}
