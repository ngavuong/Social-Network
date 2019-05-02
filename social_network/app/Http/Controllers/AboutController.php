<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\User;
use App\Hobbie;

class AboutController extends Controller
{
    //
    public function __construct() {
        $this->middleware('auth');
    }

    public function secure($id){
        $user = User::where('id', $id)->first();

        if ($user){
            $is_my_profile = (Auth::id() == $id)?true:false;
            if (!$is_my_profile){
                return false;
            }
            return true;
        }
        return false;
    }

    public function index($id) {
        $user = User::where('id', $id)->first();
        $profile = Profile::where('id', $user->profile_id)->first();
        $hobbies = Hobbie::where('id', $user->hobbies_id)->first();
        return view('about', ['profile'=>$profile, 'user' => $user, 'hobbies'=>$hobbies]);
    }
}