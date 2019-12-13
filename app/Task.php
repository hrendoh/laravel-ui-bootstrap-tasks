<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['subject', 'due_date', 'completed', 'description'];
}
