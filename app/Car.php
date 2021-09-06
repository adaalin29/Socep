<?php

namespace App;
use TCG\Voyager\Traits\Translatable;

use Illuminate\Database\Eloquent\Model;


class Car extends Model
{
    use Translatable;
    protected $translatable = ['title','descriere_scurta','descriere'];
}
