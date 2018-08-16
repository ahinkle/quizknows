<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['question'];

    /**
     * Returns the Answers to each of the questions.
     *
     */
    public function Answers()
    {
        return $this->hasMany('App\Answer');
    }
}
