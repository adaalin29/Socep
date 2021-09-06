<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Job extends Model
{
    use Translatable;
    protected $translatable = ['titlu','descriereJob','descriere','title'];
}
