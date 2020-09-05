<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    protected $fillable = [
        'job_id',
        'worker_id',
        'is_selected',
    ];

    //Job
    public function job(){
        return $this->belongsTo(Job::class,'job_id','id');
    }

    //Worker
    public function worker(){
        return $this->belongsTo(User::class,'worker_id','id');
    }
}
