<?php

namespace App\Http\Controllers;

use App\Category;
use App\Events\Event;
use App\Events\OrderEvent;
use App\Order;
use App\Profile;
use App\User;
use Auth;
use Session;
use Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class OrderController extends Controller
{
    public function postCreateOrder(Request $request)
    {
        $this->validate($request, [
            'address' => 'required|max:255',
            'phone' => 'required|max:20'
        ]);
        $user = Auth::user();

        $profile = Profile::where('user_id', $user->id)->first() ? Profile::where('user_id', $user->id)->first() : null;
        if ($profile === null) {
            $profile = new Profile();
            $profile->address = $request->address;
            $profile->phone = $request->phone;
            $user->profile()->save($profile);
        } else {
            $profile->address = $request->address;
            $profile->phone = $request->phone;
            $profile->update();
        }

        $order = new Order();

        $order->amount = Cart::total();
        $order->save();
        $user->orders()->save($order);  // Потом раскоментировать

        $row = [];
        foreach (Cart::content() as $item) {
            $row[] = $item;
        }
        foreach ($row as $item) {
            $order->products()->attach($item->id, ['qty' => $item->qty]);
        }
        \Event::fire(new OrderEvent($order));

        Cart::store(Str::random());
        Cart::destroy();
        //Session::flash('success', 'Спасибо за покупку');
        return redirect()->route('home')->with('success', 'Спасибо за покупку');

    }
}
