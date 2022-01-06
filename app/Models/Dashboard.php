<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

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
    
    public function user()
    {
        return $this->belongsToMany(User::class);
    }
}


