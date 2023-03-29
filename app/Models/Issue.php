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
    public function book()
    {
        return $this->belongsTo(Book::class,'book_id');
    }
    public function member()
    {
        return $this->belongsTo(Member::class, 'member_id');
    }
    public function precidency()
    {
        return $this->belongsTo(Precidency::class, 'precidency_id');
    }
    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }
}
