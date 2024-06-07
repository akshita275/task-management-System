<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskManagement extends Model
{
    use HasFactory;

    protected $fillable = [
        'requirement_id',
        'task_name',
        'task_description',
        'task_type',
        'attachment',
        'task_assignment',
        'task_start_date',
        'task_end_date',
        'task_current_stage',
        'task_status',
        'teamleader_comments',
        'status',
    ];

    public function requirement(){
        return $this->belongsTo(RequirementManagement::class,'requirement_id');
    }
    public function assignto(){
        return $this->belongsTo(User::class,'task_assignment');
    }
}
