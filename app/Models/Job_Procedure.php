<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job_Procedure extends Model
{
    use HasFactory;
    protected $table = 'job_procedures';
    protected $fillable = [
        'name','procedure_id'
    ];

    public function procedures()
    {
        return $this->belongsTo(Procedure::class,'procedure_id');
    }
}
