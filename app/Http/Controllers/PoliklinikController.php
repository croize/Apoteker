<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Poliklinik;

class PoliklinikController extends Controller
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
        $a = Poliklinik::all();
        return view('poliklinik.index')->with('as',$a);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('poliklinik.create');
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
          'KodePlk' => 'required',
          'NamaPlk' => 'required',
        ]);
        $as = new Poliklinik;
        $as->KodePlk = $request->KodePlk;
        $as->NamaPlk = $request->NamaPlk;
        $ca = $request['KodePlk'];
        $ccd = Poliklinik::where('KodePlk', $ca)->value('KodePlk');
        if ($ccd==NULL) {

          $as->save();
          return redirect('poli')->with('message', 'Data Berhasil di tambahkan');
        }else{
          return redirect('poli/create')->with('message', 'Kode Poliklinik sudah tersedia, silahkan masukan Kode lain');
        }
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
        $aw = Poliklinik::find($id);
        return view('poliklinik.edit')->with('as',$aw);
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
        'NamaPlk' => 'required',
      ]);

      $as = Poliklinik::find($id);
      $as->NamaPlk = $request->NamaPlk;
      $as->save();

      return redirect('poli');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $as = Poliklinik::find($id);
        $as->delete();

        return redirect('poli');
    }
}
