<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table ='products';
    protected $fillable=['name','image', 'description','price', 'status','product_category_id'];

    public function Categories()
    {
        return $this->belongsTo(Category::class,'product_category_id');
    }
}
