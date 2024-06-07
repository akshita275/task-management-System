<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PositionMaster extends Model
{
    use HasFactory;

    protected $fillable = [
        'position_name',
        'description',
        'status',
    ];

    public function requirement(){
        return $this->hasMany(RequirementManagement::class,'position_id','position_id');
    }
}
