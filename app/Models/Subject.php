<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $table = 'subjects';

    protected $fillable = [
        'teacher_id',
        'information_about_discipline',
        'summary_topic',
        'structure',
        'self_training',
        'list_developed_competencies',
    ];

    /************ RELATIONS START ************/

    public function user(){
        return $this->belongsTo(User::class);
    }

    /************ RELATIONS FINISH ************/
}
