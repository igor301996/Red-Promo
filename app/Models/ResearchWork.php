<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResearchWork extends Model
{
    use HasFactory;

    protected $table = 'research_works';

    protected $fillable = [
        'type_training',
        'topic',
        'teacher_id',
        'related_items',
        'file',
    ];
}
