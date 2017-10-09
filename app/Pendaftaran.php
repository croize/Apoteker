<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    protected $table = 'pendaftara';
    protected $primaryKey = 'NomorPendf';
    public $incrementing = false;
    public $timestamps = false;
}
