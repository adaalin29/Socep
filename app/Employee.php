<?php

namespace App;
use TCG\Voyager\Traits\Translatable;

use Illuminate\Database\Eloquent\Model;


class Employee extends Model
{
    use Translatable;
    protected $translatable = ['url'];
}
