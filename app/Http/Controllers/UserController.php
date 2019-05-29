<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Image;

class UserController extends Controller
{
    public function profile()
    {
        return view('profile',array('user'=> Auth::user()) );
    }

    public function update_avatar(Request $Request)
    {
        if($Request->hasFile('avatar'))
        {
            $avatar=$Request->file('avatar');
            $filename=time().'.'.$avatar->getClientOriginalExtension();

            Image::make($avatar)->resize(200,200)->save(public_path('/server/profile_pictures/'.$filename));

            $user=Auth::user();
            $user->avatar = $filename;
            $user->save();
        }

        return view('profile',array('user'=> Auth::user()) );
    }

}
