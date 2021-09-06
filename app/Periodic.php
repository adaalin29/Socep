<?php

namespace App;
use TCG\Voyager\Traits\Translatable;

use Illuminate\Database\Eloquent\Model;


class Periodic extends Model
{
    use Translatable;
    protected $translatable = ['name','url'];
}
