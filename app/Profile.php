<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    // protected $fillable = [
    //     'mobile_no', 
    //     'sex', 
    //     'image', 
    //     'bio',
    //     'twitter_url',
    //     'facebook_url',
    //     'instagram_url',
    // ];

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/blank-profile-picture.png';
        return 'storage/'.$imagePath;
    }
}
