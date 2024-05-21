<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Procedure extends Model
{
    use HasFactory;
    protected $table='procedures';
    protected $fillable = [
        'name', 'description', 'parent_id'
    ];

    public function procedure1()
    {
        return $this->hasMany(Job_Procedure::class,'procedure_id');
    }   
    public function jobprocess()
    {
        return $this->belongsToMany(Procedure::class,"job_processing","procedure_id");
    } 
    public function procedure2()
    {
        return $this->hasMany(Procedure::class,'parent_id','id');
    }
}

