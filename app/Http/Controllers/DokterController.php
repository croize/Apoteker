<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dokter;


class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $a=Dokter::all();
        return view ('Dokter.index')->with('b',$a);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
          return view ('Dokter.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
        'KodeDkt'=>'required',
        'NamaDkt'=>'required',
        'Spesialis'=>'required',
        'AlamatDkt'=>'required',
        'TeleponDkt'=>'required',
        'KodePIK'=>'required',
        'Tarif'=>'required',
      ]);

      $c=new Dokter();
      $c->KodeDkt=$request->KodeDkt;
      $c->NamaDkt=$request->NamaDkt;
      $c->Spesialis=$request->Spesialis;
      $c->AlamatDkt=$request->AlamatDkt;
      $c->TeleponDkt=$request->TeleponDkt;
      $c->KodePIK=$request->KodePIK;
      $c->Tarif=$request->Tarif;
      $c->save();

      return redirect('dokter');
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
        //
        $a=Dokter::find($id);
        return view ('Dokter.edit')->with('b',$a);
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
        //
        $this->validate($request, [
          'KodeDkt'=>'required',
          'NamaDkt'=>'required',
          'Spesialis'=>'required',
          'AlamatDkt'=>'required',
          'TeleponDkt'=>'required',
          'KodePIK'=>'required',
          'Tarif'=>'required',
        ]);

        $c=Dokter::find($id);
        $c->KodeDkt=$request->KodeDkt;
        $c->NamaDkt=$request->NamaDkt;
        $c->Spesialis=$request->Spesialis;
        $c->AlamatDkt=$request->AlamatDkt;
        $c->TeleponDkt=$request->TeleponDkt;
        $c->KodePIK=$request->KodePIK;
        $c->Tarif=$request->Tarif;
        $c->save();

        return redirect('dokter');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $c=Dokter::find($id);
        $c->delete();
          return redirect('dokter');
    }
}
