<?php

namespace App\Http\Controllers;

use App\Product;
use Auth;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Str;
//use Request;
use Illuminate\Http\Request;
use Session;
use Stripe\Charge;
use Stripe\Stripe;
use Symfony\Component\Console\Input\Input;

use App\Http\Requests;

class CartController extends Controller
{
    public function postCart()
    {
        if (\Request::isMethod('post')) {
            $product_id = \Request::get('product_id');
            $product = Product::find($product_id);

            Cart::add(array('id' => $product_id, 'name' => $product->name, 'qty' => 1, 'price' => $product->price, 'image' => $product->image));
        }

        //increment the quantity
        if (\Request::get('product_id') && (\Request::get('increment')) == 1) {
            $rowId = Cart::search(array('id' => \Request::get('product_id')));
            $item = Cart::get($rowId[0]);

            Cart::update($rowId[0], $item->qty + 1);
        }

        //decrease the quantity
        if (\Request::get('product_id') && (\Request::get('decrease')) == 1) {
            $rowId = Cart::search(array('id' => \Request::get('product_id')));
            $item = Cart::get($rowId[0]);

            Cart::update($rowId[0], $item->qty - 1);
        }
        $cart = Cart::content();
        $count = Cart::count();
        Session::put('count', $count);
        //Session::put('cart', $cart);

        //return view('carts.cart', array('cart' => $cart, 'title' => 'Welcome', 'description' => '', 'page' => 'home'));
        //return view('carts.cart', compact('cart'));
        Session::flash('success', 'Товар успешно добавлен в корзину');
        return redirect()->back();
    }

    public function getCart() {
        //increment the quantity
        if (\Request::get('product_id') && (\Request::get('increment')) == 1) {
            $rowId = Cart::search(array('id' => \Request::get('product_id')));

            $item = Cart::get($rowId[0]);

            Cart::update($rowId[0], $item->qty + 1);
        }

        if (Auth::check()) {
            $user = Auth::user();
        }else {
            return redirect('login');
        }

        if (Cart::count()) {
            $cart = Session::get('cart');
            $cart = Cart::content();
            return view('carts.cart', compact('cart', 'user'));
        } else {
            Session::flash('error', 'В корзине ничего нет');
            return redirect()->back();
        }

    }

    public function clearCart()
    {
        Cart::destroy();
        Session::forget('count');
        //Session::forget('cart');
        Session::flash('success', 'Корзина очищена');
        return redirect()->route('home');
    }

    public function getUpdateCart($id)
    {
        $count = Session::get('count');
        $rowId = Cart::search(function ($cartItem, $rowId) use ($id, $count) {
            Session::put('count', $count - $cartItem->qty);

            return $cartItem->id === $id;
        });
        $rowId = key($rowId->toArray());

        Cart::remove($rowId);
        //session(['count'] ) = Session::get('count') - 1 ;
        return redirect()->back();
    }

    public function getCheckout()
    {
        if (!Cart::count()) {
            return redirect()->route('home')->withError('В корзине ничего нет');
        }
        //$cart = Cart::content();
        $total = Cart::total();
        return view('carts.checkout', compact('total'));
    }

    public function postCheckout(Request $request)
    {
        if (!Cart::count()) {
            return redirect()->route('home')->withError('В корзине ничего нет');
        }
        Stripe::setApiKey('sk_test_1pP6nC6fgmE5BT0f6LFLyguG');
        try {
            Charge::create([
                "amount" => round(Cart::total()/65*100, 0),
                "currency" => "usd",
                "source" => $request->input('stripeToken'), // obtained with Stripe.js
                "description" => "Test charge"
            ]);
        } catch (\Exception $e) {
            return redirect()->route('checkout')->with('error', $e->getMessage());
        }
        //\Event::fire(new OrderEvent($order));

        Cart::store(Str::random());
        Cart::destroy();
        return redirect()->route('home')->withSuccess('Спасибо за покупку');
    }
}
