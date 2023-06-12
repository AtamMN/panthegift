<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index(){
        $title = '';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        return view('products', [
            'title' => 'All Product' . $title,
            'products' => Product::latest()->filter(request(['search', 'category']))->paginate(11)->withQueryString()
        ]);
    }

    public function show(Product $product){
        return view('product', [
            'title'=> 'Single Product',
            'product' => $product
        ]);
    }
}
