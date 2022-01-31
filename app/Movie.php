<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [

        'title',
        'subTitle',
        'release_date',

    ];
    public function fullTitles()
    {
        return $this->title. " - ". $this->subTitle. " [". $this->release_date. "] ";
    }
}
