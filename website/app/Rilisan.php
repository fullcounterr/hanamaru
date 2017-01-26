<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rilisan extends Model
{
    //Model for Rilisan (New Releases)
    protected $table = 'rilisan';
    protected $primaryKey = "id_rilisan"; // ini buat findnya cari kolom ini, kalo ga di define, dia cari kolom bernama [id]
   	protected $guarded = array('id_rilisan');
    public $timestamps  = false;
}
