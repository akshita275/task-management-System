<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FunctionMaster extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'function_name', 'description', 'status',
    ];
    public function candidates(){
        return $this->hasMany(Candidates::class,'function_id', 'function_id');
    }
}
