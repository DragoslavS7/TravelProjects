<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Email;
use Input;
use Mail;
use App\Mail\Hello;

class MailController extends Controller
{
    public function index()
    {
        $email = Email::all();

        return view('kontakt.kontakt', compact('email'));
    }

    public function create()
    {
        return view('kontakt.EmailWel');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'emaill' => 'required|min:5|max:255',
            'vise' => 'required|min:5|max:255'
        ]);

        $email = new Email([
            'emaill' => $request->get('emaill'),
            'vise' => $request->get('vise'),
        ]);

         Mail::to('gagipredojevic65@gmail.com')
                ->cc('zilibasic@s7designcreative.com')
                ->send(new Hello($email['emaill'],$email['vise']));


        $email->save();

        return redirect('/kontakt');
    }

}
