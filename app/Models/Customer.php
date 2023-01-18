<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    protected  $guarded = [];

    public function getActiveAttribute($attribute){
        return [
            0 => 'Inactive',
            1 => 'Active',
        ][$attribute];
    }
//    public function scopeActive($query){
//        return $query->where('active',1);
//    }
//
//
//    public function scopeInactive($query){
//        return $query->where('active',0);
//    }

    public function catagory(){
        return$this->belongsTo(Catagory::class);
    }
    public function seeker(){
        return $this->hasMany(Seeker::class);
    }

}
