<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SurveyResponse extends Model
{
    use SoftDeletes;
    protected $guarded= [];
    protected $dates = ['deleted_at'];

    public function survey(){
        return $this->belongsTo(Survey::class);
   }
}
