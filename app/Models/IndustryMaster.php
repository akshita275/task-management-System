<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndustryMaster extends Model
{
    use HasFactory;

    protected $fillable = [
        'industry_name', 'description', 'status',
    ];
    public function candidates(){
        return $this->hasMany(Candidates::class,'industry_id','industry_id');
    }
}
