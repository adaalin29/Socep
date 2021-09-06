<?php

namespace App;
use TCG\Voyager\Traits\Translatable;

use Illuminate\Database\Eloquent\Model;


class Benefit extends Model
{
    use Translatable;
    protected $translatable = ['Description'];
}
