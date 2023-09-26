<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public function order(){
        return $this->belongsTo(Pesanan::class);
    }

    public function users(){
        return $this->belongsTo(User::class);
    }
}
