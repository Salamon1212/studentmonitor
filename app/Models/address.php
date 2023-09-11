<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class address extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','address', 'city', 'state','street','pincode'];
    protected $table = 'addresses';

    public function users() {
        return $this->belongsTo(User::class, 'id');
    }
}
