<?php

namespace App\Models;
use App\Models\Member;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Precidency extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'description'
    ];
    public function returnPrecidency(){
        return $this->belongsToMany(Member::class,'return_precidency','member_id','id');
    }
}
