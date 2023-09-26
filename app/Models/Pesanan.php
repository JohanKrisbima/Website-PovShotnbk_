<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Pesanan extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function buy(){
        return $this->belongsTo(Pesanan::class);
    }
    
    protected $guarded = [
        'id'
    ];
}
