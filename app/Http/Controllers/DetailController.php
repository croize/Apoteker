<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detail;
use App\Resep;
use App\Obat;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas= Detail::all();
        return view('detail.index')->with('datas', $datas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $as = Resep::all();
        $ob = Obat::all();
        return view('detail.create')->with('sa' ,$as)->with('ba', $ob);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $this -> validate($request, [
            'NomorResep'=>'required',
            'KodeObat'=>'required',
            'Harga'=>'required',
            'Dosis'=>'required',
            'SubTotal'=>'required',
        ]);

        $tambah = new Detail();
        $tambah->NomorResep= $request['NomorResep'];
        $tambah->KodeObat= $request['KodeObat'];
        $tambah->Harga = $request['Harga'];
        $tambah->Dosis= $request['Dosis'];
        $tambah->SubTotal = $request['SubTotal'];
        $tambah->save();

        return redirect('detail');
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
        $tampiledit =Detail::where('id', $id)->first();
        $as = Resep::all();
        $bat = Obat::all();
        return view ('detail.edit')->with('tampiledit', $tampiledit)->with('tab', $bat)->with('res', $as);
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
            $this -> validate($request, [
            'KodeObat'=>'required',
            'Harga'=>'required',
            'Dosis'=>'required',
            'SubTotal'=>'required',
        ]);

        $tambah = Detail::find($id);
        $tambah->NomorResep= $request['NomorResep'];
        $tambah->KodeObat= $request['KodeObat'];
        $tambah->Harga = $request['Harga'];
        $tambah->Dosis= $request['Dosis'];
        $tambah->SubTotal = $request['SubTotal'];
        $tambah->save();

        return redirect('detail');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = Detail::find($id);
        $hapus->delete();

        return redirect('detail');
    }
}
