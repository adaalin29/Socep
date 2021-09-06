<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Aga extends Model
{
    use Translatable;
    protected $translatable = ['name'];
    
      
    public function getFullNameAttribute()
    {
        return "{$this->name} / an-{$this->ani}";
    }
  
    public $additional_attributes = ['full_name'];
  
    public $appends = ['full_name'];
    
}
