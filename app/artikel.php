<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class artikel extends Model
{   
    protected $table = 'artikel';

    public $primaryKey = 'id_artikel';
    
    public $incrementing = false;

    protected $fillable = ['id_artikel', 'judul', 'isi', 'label', 'author', 'thumbnail'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
