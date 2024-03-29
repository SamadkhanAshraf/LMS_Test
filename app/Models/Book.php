<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'author',
        'description',
        'category_id',
        'section',
        'quantity'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
        // public function category(): HasOne
        // {
        //     return $this->hasOne(Category::class, 'category_id', 'id');
        // }

    public function returnBook(){
        return $this->belongsToMany(Member::class,'return_books','member_id','id');
    }

}

