<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer; // こちらを修正
use App\Models\Item; // こちらを修正

class Purchase extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'status',
        ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    } 
    
    public function items()
    {
        return $this->belongsToMany(Item::class)
        ->withPivot('quantity');
    }

    
}

