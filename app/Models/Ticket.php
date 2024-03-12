<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'concert_id',
        'price',
        'quantity',
    ];

    public function concert(){
        return $this->belongsTo(Concert::class);
    }
    public function order_item(){
        return $this->hasMany(Order_item::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

}