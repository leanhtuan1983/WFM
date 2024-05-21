<?php

namespace App\Models;

use Illuminate\Contracts\Queue\Job;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobProcessing extends Model
{
    use HasFactory;
    protected $table = 'job_processings';
    protected $fillable = [
        'job_id',
        'procedure_id',
        'status_id'
    ];
     public function procedure1()
     {
        return $this->hasMany(Procedure::class,'procedure_id');
     }
     public function jobs()
     {
        return $this->hasMany(Job::class,'job_id');
     }
     public function process()
     {
      return $this->belongsTo(Procedure::class,'procedure_id');
     }

     public function jobprocess()
     {
      return $this->belongsTo(Job_Procedure::class,'job_id');
     }
     public function jobstatus()
     {
      return $this->belongsTo(Status::class,'status_id');
     }
}
