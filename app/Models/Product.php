<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

	public function categories()
	{
		
		return $this->belongsToMany(\App\Models\Category::class);
	
	}


	protected $fillable = ['name', 'slug', 'description', 'more_description', 'additional_infos', 'stock', 'solde_price', 'regular_price', 'imageUrls', 'brand', 'isAvailable', 'isNewArrival', 'isFeatured', 'isSpecialOffer', 'categories'];
}
