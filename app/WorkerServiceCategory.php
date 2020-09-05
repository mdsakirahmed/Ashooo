<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WorkerServiceCategory extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
    ];

    //Services
    public function services(){
        return $this->hasMany(WorkerService::class,'category_id','id')->orderBy('id','desc');
    }
}
