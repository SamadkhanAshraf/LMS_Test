<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'description'
    ];
//     public function book()
//     {

//         return $this->hasMany(Book::class);

//     }
// public function book(){
//     return $this->belongsTo(Book::class, 'category_id', 'id');
// }
}
