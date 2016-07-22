<?php

namespace App\Http\Controllers;

use App\Profile;
use App\User;
use Auth;
use Gloudemans\Shoppingcart\Cart;
use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    public function getProfile($id)
    {
        $profile = User::find($id)->profile ? User::find($id)->profile : null;
        if (!$profile) {
            return view('users.profile', compact('profile'));
        }
        return view('users.profile', compact('profile'));
    }

    public function postProfile(Request $request)
    {
        $this->validate($request, [
            'address' => 'required|max:255',
            'phone' => 'required|max:20'
        ]);
        $user = User::findOrFail(Auth::user()->id);
        $profile = new Profile();
        $profile->address = $request->address;
        $profile->phone = $request->phone;
        if ($user->profile()->save($profile)) {
            \Session::flash('success', 'Профиль сохранен');
        } else {
            \Session::flash('error', 'Ошибка');
        }


        return redirect()->back();
    }

    public function getLogout()
    {
        \Cart::destroy();;
        Auth::logout();
        return redirect()->route('home');
    }
    
    
}
