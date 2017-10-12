<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
  protected $table = 'Obat';
  protected $primaryKey = 'Kode_Obat';
  protected $fillable = ['Nama_Obat','Jenis_Obat','Katagori','Harga_Obat','Jumlah_Obat'];
  public $timestamps = false;
  public $incrementing = false;

  public function resep()
 {
     return $this->hasMany('App\Resep');
 }
}
