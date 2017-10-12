<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pasien;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {
         $this->middleware('auth');
     }

    public function index()
    {
        $a=Pasien::all();
        return view ('pasien.index')->with('b',$a);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('pasien.create');
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
            'kode_psn'=>'required',
            'nama_psn'=>'required',
            'alamat_psn'=>'required',
            'gender_psn'=>'required',
            'umur_psn'=>'required',
            'telepon_psn'=>'required',
            ]);

        $c = new Pasien();
        $c->kode_psn=$request->kode_psn;
        $c->nama_psn=$request->nama_psn;
        $c->alamat_psn=$request->alamat_psn;
        $c->gender_psn=$request->gender_psn;
        $c->umur_psn=$request->umur_psn;
        $c->telepon_psn=$request->telepon_psn;
        $c->save();

        return redirect('pasien');

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
        $sau = Pasien::find($id);

        return view('pasien.edit')->with('sa',$sau);
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
        $this->validate($request, [
            'nama_psn'=>'required',
            'alamat_psn'=>'required',
            'gender_psn'=>'required',
            'umur_psn'=>'required',
            'telepon_psn'=>'required',
            ]);

        $sa = Pasien::find($id);
        $sa->nama_psn=$request->nama_psn;
        $sa->alamat_psn=$request->alamat_psn;
        $sa->gender_psn=$request->gender_psn;
        $sa->umur_psn=$request->umur_psn;
        $sa->telepon_psn=$request->telepon_psn;
        $sa->save();

        return redirect('pasien');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $sa = Pasien::find($id);
         $sa->delete();

         return redirect('pasien');
    }
}
