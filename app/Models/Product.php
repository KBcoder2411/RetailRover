<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'pname',
        'title',
        'description',
        'regprice',
        'saleprice',
        'tax',
        'category',
        'mainimage',
        'image1',
        'image2',
        'image3'
    ];
  
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
    

}
