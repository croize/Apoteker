<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resep;

class ResepController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $val = Resep::all();
        return view('resep.index')->with('vala', $val);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('resep.create'); // resep = nama folder | create = nama file di folder resep
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //Ini NomorResep , dll yang berada di line 41 - 47 merupakan atribute dari Table Resep
      $this->validate($request, [
        'NomorResep' => 'required',
        'TanggalResep' => 'required',
        'KodeDkt' => 'required',
        'KodePsn' => 'required',
        'KodePlk' => 'required',
        'TotalHarga' => 'required | integer',
        'Bayar' => 'required | integer',
      ]);

        $u = new Resep; // <---- Resep itu adalah nama model nya
        $u->NomorResep = $request->NomorResep; // $u->atributetable = $request->nameyangdiform
        $u->TanggalResep = $request->TanggalResep;
        $u->KodeDkt = $request->KodeDkt;
        $u->KodePsn = $request->KodePsn;
        $u->KodePlk = $request->KodePlk;
        $u->TotalHarga = $request->TotalHarga;
        $u->Bayar = $request->Bayar;
        $a = $request->TotalHarga - $request->Bayar;
        $u->Kembali = $a;
        $u->save();

        return redirect('resep'); // Ini isinya boleh diisi sama kaya route yang di pakai buat ngejalanin Controller ini

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
