<?php

namespace App;
use TCG\Voyager\Traits\Translatable;

use Illuminate\Database\Eloquent\Model;


class Gathering extends Model
{
    use Translatable;
    protected $translatable = ['name','url'];
    protected $fillable = ['id_aga'];
  
    public function aga(){
      return $this->belongsTo(Aga::class, 'id_aga');
    }
}
