<?php

namespace App;
use TCG\Voyager\Traits\Translatable;

use Illuminate\Database\Eloquent\Model;


class Directory extends Model
{
    use Translatable;
    protected $translatable = ['nume','url','descriere','titlu'];
    
}
