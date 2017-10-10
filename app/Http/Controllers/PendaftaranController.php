<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pendaftaran;
use App\Dokter;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $a = Pendaftaran::all();
        return view('pendaftaran.index')->with('n',$a);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $a = Dokter::all();
        return view('pendaftaran.create')->with('b', $a);
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
          'NomorPendf' => 'required',
          'TanggalPendf' => 'required',
          'KodeDkt' => 'required',
          'KodePsn' => 'required',
          'KodePlk' => 'required',
          'Biaya' => 'required | integer',
          'Ket' => 'required',
        ]);

        $b = new Pendaftaran();
        $b->NomorPendf = $request->NomorPendf;
        $b->TanggalPendf = $request->TanggalPendf;
        $b->KodeDkt = $request->KodeDkt;
        $b->KodePsn = $request->KodePsn;
        $b->KodePlk = $request->KodePlk;
        $b->Biaya = $request->Biaya;
        $b->Ket = $request->Ket;
        $b->save();

        return redirect('pendaftaran');

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
        $b = Pendaftaran::find($id);
        $c = Dokter::all();
        return view('pendaftaran.edit')->with('yu', $b)->with('b', $c);
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
        'NomorPendf' => 'required',
        'TanggalPendf' => 'required',
        'KodeDkt' => 'required',
        'KodePsn' => 'required',
        'KodePlk' => 'required',
        'Biaya' => 'required | integer',
        'Ket' => 'required',
      ]);

      $b = Pendaftaran::find($id);
      $b->TanggalPendf = $request->TanggalPendf;
      $b->KodeDkt = $request->KodeDkt;
      $b->KodePsn = $request->KodePsn;
      $b->KodePlk = $request->KodePlk;
      $b->Biaya = $request->Biaya;
      $b->Ket = $request->Ket;
      $b->save();

      return redirect('pendaftaran');
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
