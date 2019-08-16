<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class peserta extends Model
{
    public $timestamps = false;
    
    protected $table = 'peserta';

    public $primaryKey = 'id_peserta';

    protected $fillable = ['penyelengara', 'tema', 'nama_peserta', 'no_hp', 'email', 'asal_provinsi'];
}
