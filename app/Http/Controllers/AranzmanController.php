<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\Aranzman;

use Illuminate\Support\Facades\Input;

use Illuminate\Pagination\Paginator;

use Mail;

use App\Mail\Hello;

use Illuminate\Contracts\Validation\ValidationException;

class AranzmanController extends Controller
{
    public function index()
    {

        $aranzman = Aranzman::paginate(0);

        return view('aranzman.index', compact('aranzman'));
    }


    public function create()
    {
        return view('aranzman.create');
    }


    public function store(Request $request)
    {
        $nameNortification = Input::get('submitAranz');

        if ($nameNortification == '') {
            echo 'error';
            $notification = array(
                'message' => 'error !',
                'alert-type' => 'error'
            );

        } else {
            echo 'success';
            $notification = array(
                'message' => 'Successfully!',
                'alert-type' => 'success'
            );
        }

        $this->validate($request,[
            'Destinacija' => 'required|min:5|max:255',
            'Kategorija' => 'required|min:5|max:255',
            'Prevoz' => 'required|min:5|max:255',
            'Hotel' => 'required|min:5|max:255',
            'Cena' => 'required|numeric',
            'Viza' => 'required'
        ]);

        $aranzman = new Aranzman([
            'Destinacija' => $request->get('Destinacija'),
            'Kategorija' => $request->get('Kategorija'),
            'Prevoz' => $request->get('Prevoz'),
            'Hotel' => $request->get('Hotel'),
            'Cena' => $request->get('Cena'),
            'Viza' => $request->get('Viza')
        ]);

        $aranzman->save();

        return redirect('/aranzman');
    }



    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $aranzman = Aranzman::find($id);

        return view('aranzman.edit', compact('aranzman','id'));

    }


    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'Destinacija' => 'required|min:5|max:255',
            'Kategorija' => 'required|min:5|max:255',
            'Prevoz' => 'required|min:5|max:255',
            'Hotel' => 'required|min:5|max:255',
            'Cena' => 'required|numeric',
            'Viza' => 'required'
        ]);

        $aranzman = Aranzman::find($id);
        $aranzman->Destinacija = $request->get('Destinacija');
        $aranzman->Kategorija = $request->get('Kategorija');
        $aranzman->Prevoz = $request->get('Prevoz');
        $aranzman->Hotel = $request->get('Hotel');
        $aranzman->Cena = $request->get('Cena');
        $aranzman->Viza = $request->get('Viza');
        $aranzman->save();

        return redirect('/aranzman');
    }


    public function destroy($id)
    {
        $aranzman = Aranzman::find($id);
        $aranzman->delete();

        return redirect('/aranzman');
    }
}
