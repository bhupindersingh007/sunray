<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request) : View
    {

        $products = Product::when($request->search, function($query, $search){

            $query->where('name', 'like', "%$search%");

        })
        ->when($request->category, function($query, $category){

            $query->where('category', $category);

        })
        ->when($request->type == 'sale', function($query){

            $query->where('on_sale', true);

        })
        ->when($request->type == 'featured', function($query){

            $query->where('is_featured', true);

        })
        ->simplePaginate(6);

        return view('products.index', compact('products'));


    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product) : View
    {
        return view('products.show', compact('product'));
    }


}
