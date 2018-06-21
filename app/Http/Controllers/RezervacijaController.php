<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Rezervacija;

use Illuminate\Support\Facades\Input;

use DB;

use Illuminate\Pagination\Paginator;

class RezervacijaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rezervacijas = Rezervacija::paginate(0);

        return view('rezervacija.index', compact('rezervacijas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rezervacija.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'ImeKorisnika' => 'required|min:5|max:255',
            'PrezimeKorisnika' => 'required|min:5|max:255',
            'JMBG'  => 'required|min:13',
            'Telefon' => 'required|numeric',
            'Od' =>'required|date',
            'Do' =>'required|date',
            'Adresa' => 'required|min:5|max:255',
            'Aranzman' => 'required|min:5|max:255',
        ]);

        $rezervacijas = new Rezervacija([
            'ImeKorisnika' => $request->get('ImeKorisnika',255),
            'PrezimeKorisnika' => $request->get('PrezimeKorisnika',255),
            'JMBG' => $request->get('JMBG',255),
            'Telefon' => $request->get('Telefon',255),
            'Od' => $request->get('Od',255),
            'Do' => $request->get('Do',255),
            'Adresa' => $request->get('Adresa',255),
            'Soba' => $request->get('Soba',255),
            'Aranzman' => $request->get('Aranzman',255)
        ]);

        $rezervacijas->save();


        return redirect('/rezervacija');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
        $rezervacijas = Rezervacija::find($id);

        return view('rezervacija.edit', compact('rezervacijas','id'));

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
            'ImeKorisnika' => 'required|min:5|max:255',
            'PrezimeKorisnika' => 'required|min:5|max:255',
            'JMBG'  => 'required|min:13',
            'Telefon' => 'required|numeric',
            'Od' =>'required|date',
            'Do' =>'required|date',
            'Adresa' => 'required|min:5|max:255',
            'Aranzman' => 'required|min:5|max:255',
        ]);

        $rezervacijas = Rezervacija::find($id);
        $rezervacijas->ImeKorisnika = $request->get('ImeKorisnika');
        $rezervacijas->PrezimeKorisnika = $request->get('PrezimeKorisnika');
        $rezervacijas->JMBG = $request->get('JMBG');
        $rezervacijas->Telefon = $request->get('Telefon');
        $rezervacijas->Od = $request->get('Od');
        $rezervacijas->Do = $request->get('Do');
        $rezervacijas->Adresa = $request->get('Adresa');
        $rezervacijas->Soba = $request->get('Soba');
        $rezervacijas->Aranzman = $request->get('Aranzman');
        $rezervacijas->save();

        return redirect('/rezervacija');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rezervacijas = Rezervacija::find($id);
        $rezervacijas->delete();

        return redirect('/rezervacija');
    }

}
