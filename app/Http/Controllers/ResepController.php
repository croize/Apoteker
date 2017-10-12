<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resep;
use App\Dokter;
use App\Pasien;
use App\Poliklinik;

class ResepController extends Controller
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

    public function index(Request $request)
    {
        $query = $request->get('q');
        $vala = Resep::where('NomorResep', 'LIKE', '%' . $query . '%')->orWhere('KodePsn', 'LIKE', '%' . $query . '%')->paginate(10);
        return view('resep.index', compact('vala', 'query'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $a = Dokter::all();
        $b = Pasien::all();
        $c = Poliklinik::all();
        return view('resep.create')->with('as', $a)->with('bs', $b)->with('cs', $c); // resep = nama folder | create = nama file di folder resep
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
        $as = Resep::find($id);
        $a = Dokter::all();
        $b = Pasien::all();
        $c = Poliklinik::all();
        return view('resep.edit')->with('su',$as)->with('as',$a)->with('bs',$b)->with('cs',$c);
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
      //Ini NomorResep , dll yang berada di line 41 - 47 merupakan atribute dari Table Resep
      $this->validate($request, [
        'TanggalResep' => 'required',
        'KodeDkt' => 'required',
        'KodePsn' => 'required',
        'KodePlk' => 'required',
        'TotalHarga' => 'required | integer',
        'Bayar' => 'required | integer',
      ]);

        $u = Resep::find($id); // <---- Resep itu adalah nama model nya
        $u->TanggalResep = $request->TanggalResep;// $u->atributetable = $request->nameyangdiform
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $u = Resep::find($id);
        $u->delete();
        return redirect('resep');
    }
}
