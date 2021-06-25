<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vendor extends Model
{ 
    use HasFactory;


    protected $table = 'vendor';
    
    protected $fillable = [
        'date','vendor','services','assessor','user_id','question1_1','quesion1_1_comment', 
        'question1_2','question1_2_comment', 'question1_3', 'question1_3_comment', 'question2_1',
        'question2_1_comment','question2_2', 'question2_2_comment','question3_1','question3_1_comment',
        'question3_2','question3_2_comment', 'total'
    ];

    public function getTable()
    {
        if (isset($this->table)) {
            return $this->table;
        }


    }
}
