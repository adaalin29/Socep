<?php

namespace App;
use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;


class Tranzaction extends Model
{
    use Translatable;
    protected $translatable = ['name','url'];
}
