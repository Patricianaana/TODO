<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use SoftDeletes;
    // use HasFactory;
    public $table = 'tasks';
    protected $fillable = [
        'title',
        'description',
        'due_date',
    ];

    public function isCompleted(){
        return $this->completed_at !== null;
    }

    public function details()
    {
        return $this->hasOne(Detail::class, 'id');
    }
}
