<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardProductController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth()->user()->username == 'atammn'){
            return view('dashboard.index',[
                'products'=>Product::latest()->paginate(5),
                'categories'=>Category::all()
            ]);
        }
        else{
            return view('dashboard.userview',[
                'transaction'=>Transaction::latest()->paginate(5),
                'categories'=>Category::all()
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'=>'required|max:255',
            'slug' =>'required|unique:products',
            'category_id' => 'required',
            'desc'=> 'required',
            'price'=> 'required'
        ]);

        $validated['user_id'] = auth()->user()->id;
        $validated['excerpt'] = Str::limit(strip_tags($request->desc), 100);

        Product::create($validated);

        return redirect('/dashboard')->with('success', 'New product successfully added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        // @dd($product->price);    
        return view('dashboard.edit', [
            'categories' => Category::all(),
            'product' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        $rules = $request->validate([
            'title'=>'required|max:255',
            'category_id' => 'required',
            'desc'=> 'required',
            'price'=> 'required'
        ]);

        // if($request->slug != $product->slug){
        //     $rules['slug'] = "required|unique:products";
        // }
        
        // $validated = $request->validate($rules);

        // $rules['user_id'] = auth()->user()->id;
        $rules['excerpt'] = Str::limit(strip_tags($request->desc), 100);

        Product::where('id', $product->id)->update($rules);

        return redirect('/dashboard')->with('success', 'product successfully edited!');
    }

    public function destroy($id)
    {
        // @dd(request('slug'));
        $product = Product::find($id);
        $product->delete($product);
        session()->flash('success', ' Deleted Successfully!!!');
        return redirect('/dashboard');
    }


    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Product::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}