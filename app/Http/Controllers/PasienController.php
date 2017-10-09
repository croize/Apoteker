<?php

namespace App\Http\Controllers;
use App\Pasien;

use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $a=Pasien::all();
        return view ('Pasien.index')->with('b',$a);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('Pasien.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
          'KodePsn'=>'required',
          'NamaPsn'=>'required',
          'AlamatPsn'=>'required',
          'GanderPsn'=>'required',
          'UmurPsn'=>'required',
          'TeleponPsn'=>'required',

        ]);
        $c=new Pasien();
        $c->KodePsn=$request->KodePsn;
        $c->NamaPsn=$request->NamaPsn;
        $c->AlamatPsn=$request->AlamatPsn;
        $c->GenderPsn=$request->GenderPsn
        $c->UmurPsn=$request->UmurPsn;
        $c->TeleponPsn=$request->TeleponPsn;
        $c->save();


        ]);
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
    }
}
