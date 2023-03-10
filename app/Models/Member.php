<?php

namespace App\Models;
use App\Models\Precidency;
use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $fillable=[
    'name',
    'fname',
    'address',
    'phone',
    'email',
    'precidency_id',
    'department_id'
];

public function precidency()
{
    return $this->belongsTo(Precidency::class,'precidency_id');
}

public function department()
{
    return $this->belongsTo(Department::class,'department_id');
}
   
}

