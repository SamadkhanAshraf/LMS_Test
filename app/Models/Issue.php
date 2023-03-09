<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    use HasFactory;
    protected $fillable = [
        'book_id',
        'member_id',
        'precidency_id',
        'department_id',
        'issue_date',
        'return_date',
        'expire_date'
    ];
}
