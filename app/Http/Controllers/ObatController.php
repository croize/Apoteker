<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Obat;
use Auth;

class ObatController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    if (Auth::check()) {
      $datas= Obat::orderBy('Kode_Obat' , 'ASC')->paginate(10);
      return view('Obat.show')->with('datas', $datas);
    }else{
      return redirect('login');
    }

  }
  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    if (Auth::check()) {
      return view('Obat.create');
    }else{
      return redirect('login');
    }

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
          'Kode_Obat' => 'required',
          'Nama_Obat'=>'required',
          'Jenis_Obat'=>'required',
          'Katagori'=>'required',
          'Harga_Obat'=>'required',
          'Jumlah_Obat'=>'required',
      ]);

      $tambah = new Obat();
      $tambah->Kode_Obat= $request['Kode_Obat'];
      $tambah->Nama_Obat= $request['Nama_Obat'];
      $tambah->Jenis_Obat = $request['Jenis_Obat'];
      $tambah->Katagori= $request['Katagori'];
      $tambah->Harga_Obat = $request['Harga_Obat'];
      $tambah->Jumlah_Obat= $request['Jumlah_Obat'];
      $tambah->save();
      return redirect()->to('obat');
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
      if (Auth::check()) {
        $tampiledit =Obat::where('Kode_Obat', $id)->first();
        return view ('Obat.edit')->with('tampiledit', $tampiledit);
      }else{
        return redirect('login');
      }

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
          'Nama_Obat'=>'required',
          'Jenis_Obat'=>'required',
          'Katagori'=>'required',
          'Harga_Obat'=>'required',
          'Jumlah_Obat'=>'required',
      ]);
      $update = Obat::where('Kode_Obat', $id)->first();
      $update->Nama_Obat= $request['Nama_Obat'];
      $update->Jenis_Obat = $request['Jenis_Obat'];
      $update->Katagori= $request['Katagori'];
      $update->Harga_Obat = $request['Harga_Obat'];
      $update->Jumlah_Obat= $request['Jumlah_Obat'];
      $update->update();
      return redirect()->to('obat');
  }
  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      $hapus = Obat::find($id);
      $hapus->delete();
      return redirect()->to('obat');
  }
}
