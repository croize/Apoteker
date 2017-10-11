<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $table = 'detail';
    public $timestamps = false;

    public function resep()
   {
       return $this->belongsTo('App\Resep','NomorResep','NomorResep');
   }

   public function obat()
  {
      return $this->belongsTo('App\Obat','KodeObat','Kode_Obat');
  }

}
