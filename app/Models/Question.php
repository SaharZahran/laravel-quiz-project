<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable = [
        'question_text',
        'answer_one',
        'answer_two',
        'answer_three',
        'answer_four',
        'right_answer'
    ];

    public function quiz(){
        return $this->belongsTo(Dashboard::class);
    }
}
