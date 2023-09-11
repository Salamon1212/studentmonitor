<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Role;

class staff extends Model
{
    use HasFactory;
    protected $fillable = ['first_name', 'last_name', 'email','role_id','gender',
                            'dob','phone_number','qualification','qualification2','status'];


    // public function roles()
    // {
    //     return $this->belongsToMany(Role::class, 'staff_id');
    // }
}
