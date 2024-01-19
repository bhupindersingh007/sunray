<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Product extends Model
{
    use HasFactory;

    /**
     * Get the route key for the model.
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    
    /**
     * Scope a query to filter products
     */
    public function scopeFilter(Builder $query, $search = null , $category = null, $type = null): void
    {

        $query->when($search, function($query, $search){

            $query->where('name', 'like', "%$search%");

        })
        ->when($category, function($query, $category){

            $query->where('category', $category);

        })
        ->when($type == 'sale', function($query){

            $query->where('on_sale', true);

        })
        ->when($type == 'featured', function($query){

            $query->where('is_featured', true);

        });
    }

}
