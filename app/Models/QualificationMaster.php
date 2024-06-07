<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QualificationMaster extends Model
{
    use HasFactory;

    protected $fillable = [
        'qualification_name',
        'description', 
        'status',
    ];

    public function candidates(){
        return $this->hasMany(Candidates::class);
    }
}
