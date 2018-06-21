<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\Sobe;

use Illuminate\Support\Facades\Input;

class SobeController extends Controller
{
    public function index(Request $request)
    {
        $Sobe = Sobe::paginate(0);

        return view('Sobe.index', compact('Sobe'));
    }


    public function create()
    {
        return view('Sobe.create');

    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'BrojKreveta' => 'required|numeric',
            'Opis' => 'required|min:5|max:255'
        ]);

        $sobe = new Sobe([
            'BrojKreveta' => $request->get('BrojKreveta'),
            'Opis' => $request->get('Opis')
        ]);


        $sobe->save();

        return redirect('/Sobe');
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
        $sobe = Sobe::find($id);

        return view('Sobe.edit', compact('sobe','id'));
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
            'BrojKreveta' => 'required|numeric',
            'Opis' => 'required|min:5|max:255'
        ]);


        $sobe = Sobe::find($id);
        $sobe->BrojKreveta = $request->get('BrojKreveta');
        $sobe->Opis = $request->get('Opis');
        $sobe->save();
        return redirect('/Sobe');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sobe = Sobe::find($id);
        $sobe->delete();

        return redirect('/Sobe');
    }
}
