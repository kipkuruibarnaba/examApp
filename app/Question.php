<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Question extends Model
{
     use SoftDeletes;

    protected $guarded = [];
    protected $dates = ['deleted_at'];


    public function questionnaire(){
         return $this->belongsTo(Questionnaire::class);
    }

    public function answers(){
        return $this->hasMany(Answer::class);
   }
   
}
