<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
        "start_date",
        "end_date"
    ];

    public function projects(){
        return $this->hasMany(Project::class);
    }

    
}
