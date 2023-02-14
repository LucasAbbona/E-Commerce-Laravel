<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'image_path',
        'details',
        'brand',
        'categoria',
        'category_id',
        'description',
        'shipping_cost',
    ];

    public $timestamps = false;

    public function ScopeFilter($query,array $filters){
        if($filters['search']??false){
            $query->where('name', 'like', '%' . request('search') . '%')->orWhere('price', 'like', '%' . request('search') . '%')->orWhere('brand', 'like', '%' . request('search') . '%');
        }
    }
    public function category(){
        return $this->belongsTo(Categories::class);
    }
}
