<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequirementManagement extends Model
{
    use HasFactory;

    protected $fillable = [
        'requirement_name',
        'requirement_description',
        'client_name',
        'position_id',
        'requirement_status',
        'requirement_priority',
        'attachment',
        'status',
    ];

    public function position(){
        return $this->belongsTo(PositionMaster::class,'position_id','position_id');
    }

    public function taskmanagement(){
        return $this->hasMany(TaskManagement::class);
    }
}
