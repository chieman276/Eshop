<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = "products";
    protected $fillable = [
        'id','product_name','product_image','product_price','product_quantity','product_descript','category_id'
    ];
    public $timestamps = false;

    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function orderdetail() {
        return $this->belongsToMany(Orderdetail::class, 'order_id', 'id');
    }
}
