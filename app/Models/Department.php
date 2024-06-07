<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $fillable = [
        'department_name', 'description', 'status',
    ];
    public function candidates(){
        return $this->hasMany(Candidates::class,'department_id','department_id');
    }
}
