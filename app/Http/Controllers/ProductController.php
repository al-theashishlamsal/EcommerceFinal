<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the products.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Retrieve all products
        $products = Product::all();
        
        // Return a view with the products data
        return view('backend.product.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Return a view for creating a new product
        $brands = Brand::all();
        $categories = Category::all();
        return view('backend.product.create', compact('categories','brands'));
    }

    /**
     * Store a newly created product in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the incoming request
        $validatedData = $request->validate([
            'product_name' => 'required|string',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'product_quantity' => 'required|integer|min:0',
            'category_id' => 'required|exists:categories,id',
            'brand_id' => 'required|exists:brands,id',
            'material' => 'nullable|string',
            'product_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|string',
        ]);

        // Handle file upload
        if ($request->hasFile('product_image')) {
            $image = $request->file('product_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/products'), $imageName);
            $validatedData['product_image'] = $imageName;
        }

        // Create a new product
        Product::create($validatedData);

        // Redirect to the products index with a success message
        return redirect()->route('backend.products.index')
                         ->with('success', 'Product created successfully.');
    }

    /**
     * Show the form for editing the specified product.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        // Return a view for editing the specified product
        $categories = Category::all();
        $brands = Brand::all();
    
        return view('backend.product.update', compact('product', 'categories', 'brands'));
    }

    /**
     * Update the specified product in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        // Validate the incoming request
        $request->validate([
            'product_name' => 'required|string',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'product_quantity' => 'required|integer|min:0',
            'category_id' => 'required|exists:categories,id',
            'brand_id' => 'required|exists:brands,id',
            'material' => 'nullable|string',
            'product_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|string',
        ]);

        // Update the product
        $product->update($request->all());

        // Redirect to the products index or do something else
        return redirect()->route('backend.products.index');
    }

    /**
     * Remove the specified product from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        // Delete the product
        $product->delete();

        // Redirect to the products index or do something else
        return redirect()->route('backend.products.index');
    }


    public function getBrands($categoryId)
    {
        $brands = Brand::where('category_id', $categoryId)->get();
        return response()->json($brands);
    }
}