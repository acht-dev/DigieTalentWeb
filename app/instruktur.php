<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class instruktur extends Model
{
    public $timestamps = false;

    protected $table = 'instruktur';

    public $primaryKey = 'id_instruktur';

    protected $fillable = ['id_instruktur', 'no', 'nama', 'foto', 'deskripsi', 'kategori'];


}
