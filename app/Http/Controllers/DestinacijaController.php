<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Destinacija;

use DB;

use Illuminate\Support\Facades\Input;

use Illuminate\Pagination\Paginator;

class DestinacijaController extends Controller
{
    public function index()
    {
        $Destinacije = Destinacija::paginate(0);

        return view('destinacija.index', compact('Destinacije'));
    }

    public function create()
    {
        return view('destinacija.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'Grad' => 'required|min:5|max:255',
            'Zemlja' => 'required|min:5|max:255',
            'Opisi' => 'required|min:5|max:255',
            'Latitude' => 'required|numeric',
            'Longitude' => 'required|numeric'
        ]);

        $destinacija = new Destinacija([
            'Grad' => $request->get('Grad'),
            'Zemlja' => $request->get('Zemlja'),
            'Opisi' => $request->get('Opisi'),
            'Latitude' => $request->get('Latitude'),
            'Longitude' => $request->get('Longitude')
        ]);

        $destinacija->save();


        return redirect('/destinacija');
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
        $destinacija = Destinacija::find($id);

        return view('destinacija.edit', compact('destinacija','id'));
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
            'Grad' => 'required|min:5|max:255',
            'Zemlja' => 'required|min:5|max:255',
            'Opisi' => 'required|min:5|max:255',
            'Latitude' => 'required|numeric',
            'Longitude' => 'required|numeric'
        ]);

        $destinacija = Destinacija::find($id);
        $destinacija->Grad = $request->get('Grad');
        $destinacija->Zemlja = $request->get('Zemlja');
        $destinacija->Opisi = $request->get('Opisi');
        $destinacija->Latitude = $request->get('Latitude');
        $destinacija->Longitude = $request->get('Longitude');
        $destinacija->save();
        return redirect('/destinacija');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destinacija = Destinacija::find($id);
        $destinacija->delete();

        return redirect('/destinacija');
    }
}
