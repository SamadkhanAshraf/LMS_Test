<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReturnBook extends Model
{
    use HasFactory;
    protected $fillable=[
        'member_id',
        'book_id',
        'category_id',
        'recieve_date',
        'user_id'
    ];


    public function member()
    {
        return $this->belongsTo(Member::class,'member_id');
    }

    public function book()
    {
        return $this->belongsTo(Book::class,'book_id');
    }
}

