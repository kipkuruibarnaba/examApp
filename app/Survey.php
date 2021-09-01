<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Survey extends Model
{
    use SoftDeletes;
    protected $guarded =[];
    protected $dates = ['deleted_at'];
    
    public function questionnaire(){
        return $this->belongsTo(questionnaire::class);
   }
    public function surveys(){
        return $this->hasMany(SurveyResponse::class);
   }
}
