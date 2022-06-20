<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;
        protected $table = "todo";
     protected $fillable = array(
            'todo_name'     ,
            'todo_description'    ,
            'todo_status' ,
            'todo_date' 
    );
    protected $casts = [
    'todo_date ' => 'datetime:Y-m-d',
  ];
}
