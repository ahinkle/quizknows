<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Question extends Model
{
    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        // Add a Global Scope to always include the answers with the question.
        static::addGlobalScope('answers', function (Builder $builder) {
            $builder->with('Answers');
        });
    }

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
