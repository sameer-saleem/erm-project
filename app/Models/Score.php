<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class score extends Model
{ 
    use HasFactory;

    protected $table = 'scores';

    public function getTable()
    {
        if (isset($this->table)) {
            return $this->table;
        }


    }
}
