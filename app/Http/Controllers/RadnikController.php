<?php

namespace App\Http\Controllers;

use function foo\func;
use function GuzzleHttp\Promise\all;
use Illuminate\Http\Request;

use App\Radnik;

use Illuminate\Support\Facades\Input;

use DB;

use Illuminate\Pagination\Paginator;

class RadnikController extends Controller
{
    public function index()
    {
        $radnik = Radnik::all();

        return view('radnik.index', compact('radnik'));
    }

    public function create()
    {
        return view('radnik.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'RadnikIme' => 'required|min:5|max:255',
            'Sifra' => 'required|numeric|min:6',
            'RadnikJMBG'  => 'required|min:13',
            'Adresa' => 'required|min:5|max:255',
            'Telefon' => 'required|numeric',
            'SSprema' => 'required|min:5|max:255',
        ]);


        $radnik = new Radnik([
            'RadnikIme' => $request->get('RadnikIme'),
            'Sifra' => $request->get('Sifra'),
            'RadnikJMBG' => $request->get('RadnikJMBG'),
            'Adresa' => $request->get('Adresa'),
            'Telefon' => $request->get('Telefon'),
            'SSprema' => $request->get('SSprema'),
            'Pozicija' => $request->get('Pozicija')
        ]);

        $radnik->save();



        return redirect('/radnik');
    }



    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $radnik = Radnik::find($id);

        return view('radnik.edit', compact('radnik','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request,[
            'RadnikIme' => 'required|min:5|max:255',
            'Sifra' => 'required|numeric|min:6',
            'RadnikJMBG'  => 'required|min:13',
            'Adresa' => 'required|min:5|max:255',
            'Telefon' => 'required|numeric',
            'SSprema' => 'required|min:5|max:255',
        ]);

        $radnik = Radnik::find($id);
        $radnik->RadnikIme = $request->get('RadnikIme');
        $radnik->Sifra = $request->get('Sifra');
        $radnik->RadnikJMBG = $request->get('RadnikJMBG');
        $radnik->Adresa = $request->get('Adresa');
        $radnik->Telefon = $request->get('Telefon');
        $radnik->SSprema = $request->get('SSprema');
        $radnik->Pozicija = $request->get('Pozicija');
        $radnik->save();
        return redirect('/radnik');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $radnik = Radnik::find($id);
        $radnik->delete();

        return redirect('/radnik');
    }
}
