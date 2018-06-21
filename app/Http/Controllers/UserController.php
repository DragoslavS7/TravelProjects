<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;


class UserController extends Controller
{
    //
    public function profile(){
        return view('profile', array('user' => Auth::user()) );
    }



    public function update_avatar(Request $request){

        $this->validate($request, [
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]);


        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $avatar = $avatar -> move( 'uploads/avatars',  $avatar -> getClientOriginalName());

            $user = Auth::user();
            $user -> avatar = $avatar;
            $user -> save();
        }

        return view('profile', array('user' => Auth::user()) );
    }
}
