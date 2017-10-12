<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pembayaran;
use App\Pasien;

class PembayaranController extends Controller
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
        $as = Pembayaran::all();
        return view('pembayaran.index')->with('susu',$as);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $a = Pasien::all();
        return view('pembayaran.create')->with('as',$a);
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
          'NomorByr' => 'required',
          'KodePsn' => 'required',
          'TanggalByr' => 'required',
          'JumlahByr' => 'required',
        ]);

        $sa = new Pembayaran();
        $sa->NomorByr = $request->NomorByr;
        $sa->KodePsn = $request->KodePsn;
        $sa->TanggalByr = $request->TanggalByr;
        $sa->JumlahByr = $request->JumlahByr;
        $sa->save();

        return redirect('pembayaran');
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
        $as = Pembayaran::find($id);
        $a = Pasien::all();
        return view('pembayaran.edit')->with('susu',$as)->with('asa',$a);
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
        'KodePsn' => 'required',
        'TanggalByr' => 'required',
        'JumlahByr' => 'required',
      ]);

      $sa = Pembayaran::find($id);
      $sa->KodePsn = $request->KodePsn;
      $sa->TanggalByr = $request->TanggalByr;
      $sa->JumlahByr = $request->JumlahByr;
      $sa->save();

      return redirect('pembayaran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sa = Pembayaran::find($id);
        $sa->delete();
        return redirect('pembayaran');
    }
}
