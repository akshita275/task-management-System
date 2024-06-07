<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidates extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'name', 'email', 'address', 'city', 'district', 'state',
        'qualification_id', 'industry_id', 'department_id', 'function_id',
        'experience', 'current_salary', 'notice_period', 'Resume', 
    ];

    public function qualification(){
        return $this->belongsTo(QualificationMaster::class,'qualification_id');
    }

    public function industry(){
        return $this->belongsTo(IndustryMaster::class,'industry_id');
    }

    public function department(){
        return $this->belongsTo(Department::class,'department_id');
    }

    public function workFunction(){
        return $this->belongsTo(FunctionMaster::class,'function_id');
    }
}
