<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dashboard extends Model
{
    use HasFactory;
    protected $fillable = [
        'quiz_image',
        'quiz_name',
        'number_of_questions',
        'quiz_time'
    ];
    public function question(){
        return $this->hasMany(Question::class);
    }
}
