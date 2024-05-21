<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Processing extends Model
{
    use HasFactory;
    protected $table = 'processings';
    protected $fillable = [
        'job_name',
        'procedure_id',
        'action_id',
        'dept_id',
        'started_at',
        'finished_at'
    ];
}
