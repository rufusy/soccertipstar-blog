<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;
use Intervention\Image\Facades\Image;


class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('home.profile.show', compact('user'));
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
        $input = request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:users,email,'.$id,
            'mobile_no' => '',
            'sex' => '',
            'bio' => '',
            'image' => '',
            'twitter_url' => $request->twitter_url != null ? 'url':'',
            'facebook_url' => $request->facebook_url != null ? 'url':'',
            'instagram_url' => $request->instagram_url != null ? 'url':'',
        ]);
        if(request('image'))
        {
            $imagePath = request('image')->store('profile', 'public'); // pass in directory and driver
            $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000,1000);
            $image->save();
            $imageArray = ['image' => $imagePath];
        }  
        else 
            (auth()->user()->profile->image)? $imageArray= ['image'=>auth()->user()->profile->image] : $imageArray=['image'=>''];
        
        $data = array_merge($input, $imageArray);
        
        auth()->user()->update([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email']
        ]);
        auth()->user()->profile->update([
            'mobile_no' => $data['mobile_no'],
            'sex' => $data['sex'],
            'bio' => $data['bio'],
            'image' => $data['image'],
            'twitter_url' => $data['twitter_url'],
            'facebook_url' => $data['facebook_url'],
            'instagram_url' => $data['instagram_url']
        ]);
        return redirect("profile/{$id}");
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
