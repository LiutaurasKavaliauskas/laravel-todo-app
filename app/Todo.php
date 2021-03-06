<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    /**
     * @var string
     */
    protected $table = 'todo';

    /**
     * @var array
     */
    protected $fillable = [
        'todo', 'category', 'user_id', 'description'
    ];
}
