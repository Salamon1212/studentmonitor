<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class social extends Model
{
    use HasFactory;
    protected $table = "socials";
    protected $fillable = ["social_id","profile","linked_In","instagram","facebook","designation","school","sch_location"]; 

    public function user_social(){
        return $this->hasMany(user::class,'id');
    }
}
