<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $table = 'pembayaran';
    protected $primaryKey = 'NomorByr';
    public $timestamps = false;
    public $incrementing = false;

    public function pasien()
    {
        return $this->belongsTo('App\Pasien');
    }
}
