<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'description',
        'precidency_id'
    ];
    public function directrate (){
        return $this->belongsTo(Precidency::class,'precidency_id');
    }
}
