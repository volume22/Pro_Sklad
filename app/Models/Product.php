<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Provider;

class Product extends Model
{
    protected $fillable = [
        'Type', 'product_id', 'provider_id', 'product_name', 'description', 'price'
    ];
    
    public function providers(){
        return $this->belongsTo(Provider::class, 'provider_id');
    }

    public function transaction(){
        return $this->hasMany(Transaction::class);
    }
    public function like(){
        return $this->belongsTo(Like::class);
    }

    use HasFactory;
}
