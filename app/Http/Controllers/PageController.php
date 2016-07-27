<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Product;
//use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Http\Requests;
use Mail;
//use Symfony\Component\Console\Input\Input;

class PageController extends Controller
{
    protected $data = [];
    
    public function getIndex()
    {
        $data['products'] = Product::active()->get();
        
        return view('pages.index', $data);
    }

    public function getAbout()
    {
        return view('pages.about');
    }

    public function getContacts()
    {
        return view('pages.contacts');
    }

    public function postContacts(ContactFormRequest $request)
    {
        $email = $request->email;
        $name = $request->name;
        $token = $request->input('g-recaptcha-response');
        if (!$token > 0) {
            return redirect()->back()->withError('Robot?');
        }
        $client = new Client();
        $response = $client->post('https://www.google.com/recaptcha/api/siteverify', [
            'form-params' => array(
                'secret' => '6Ld6AiYTAAAAAGvoxE8pQLlB5qgcfwse5lQYdSYM',
                'response' => $token
            )
        ]);
        $result = json_decode($response->getBody()->getContents());
        // $result приходит пустой
        /*if (!$result->success) {
            \Session::flash('error', 'Bad');
            return redirect()->back();
        }*/
        Mail::later(5, 'email.contact-message', ['request' =>$request], function($m) use ($email, $name){
            $m->from('test@test.com', 'Site');
            $m->to($email, $name);
            $m->subject('Some message');
        });
        return redirect()->route('home')->withSuccess('Mail will be send, I hope...');
    }

}
