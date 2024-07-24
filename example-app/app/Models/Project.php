<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "departament_id"
    ];

    public function department (){
        return $this->belongsTo(Departament::class);
    }

    public function jobs(){
        return $this->belongsTo(Job::class);
    }

   

}
