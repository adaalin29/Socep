<?php

namespace App;
use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;


class Meeting extends Model
{
    use Translatable;
    protected $translatable = ['name','url'];
}
