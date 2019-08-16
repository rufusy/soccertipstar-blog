<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;

use App\User;
use App\Profile;
use Intervention\Image\Facades\Image;


class ProfileController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    
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
            'image' => 'image|required|mimes:jpeg,png,jpg,gif,svg',
            'twitter_url' => $request->twitter_url != null ? 'url':'',
            'facebook_url' => $request->facebook_url != null ? 'url':'',
            'instagram_url' => $request->instagram_url != null ? 'url':'',
        ]);
        if(request('image'))
        {
           // get filename with extension
           $fileNameWithExtension = $input['image'] -> getClientOriginalName();
           // get filename without extension
           $fileName = pathinfo($fileNameWithExtension, PATHINFO_FILENAME);
           //get file extension
           $extension = $input['image'] -> getClientOriginalExtension();
           //filename to store
           $fileNameToStore = $fileName.'_'.time().'.'.$extension;
           //Upload original image
           $input['image'] -> storeAs('public/profile', $fileNameToStore);
           // resize the profile image
           $thumbNailPath = ('storage/profile/'.$fileNameToStore);
           $img = Image::make($thumbNailPath) -> resize(160, 160) -> save($thumbNailPath);

           $thumbNailPathToStore = 'profile/'.$fileNameToStore;
           $imageArray = ['image' => $thumbNailPathToStore];
        }
        else 
            (auth()->user()->profile->image)? $imageArray= ['image'=>auth()->user()->profile->image] : $imageArray=['image'=>''];
        
        $data = array_merge($input, $imageArray);
        
        auth()->user()->update([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email']
        ]);
        auth()->user()->profile()->update([
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


    public function changePassword(Request $request)
    {
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) 
        {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not match with the password you provided. Please try again.");
        }
        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
        }
        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
        ]);
        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();
        return redirect()->back()->with("success","Password changed successfully !");
    }
}
