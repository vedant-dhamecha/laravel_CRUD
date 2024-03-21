<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', ['products' => $products]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'date'=>'required',
            'profile' => 'nullable', 
            'name' => 'required',
            'email' => 'required',
            'qua'=>'required',
            'company' => 'required',
            'role' => 'required'
        ]);
        
        $data['qua'] = json_encode($request->qua);
        
        
        if ($request->hasFile('profile')) {
            $file = $request->file('profile');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('profiles', $fileName, 'public');

            $data['profile'] = $filePath;
        }

        $newProduct = Product::create($data);

        return redirect(route('product.index'))->with('success', 'User Created Successfully');
    }

    public function edit(Product $product)
    {
        return view('products.edit', ['product' => $product]);
    }

    public function update(Product $product, Request $request)
{
    $data = $request->validate([
        'date'=>'required',
        'profile' => 'nullable',
        'name'=>'required', 
        'email' => 'required',
        'qua'=>'required',
        'company' => 'required',
        'role' => 'required'
    ]);

    if ($request->hasFile('profile')) {
        $file = $request->file('profile');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $filePath = $file->storeAs('profiles', $fileName, 'public');
        
        // Delete old profile image if exists
        if ($product->profile) {
            Storage::disk('public')->delete($product->profile);
        }

        $data['profile'] = $filePath;
    }

    $product->update($data);

    return redirect(route('product.index'))->with('success', 'User Updated Successfully');
}


    public function destroy(Product $product)
    {
        
        Storage::disk('public')->delete($product->profile);
        
        $product->delete();
        return redirect(route('product.index'))->with('success', 'User deleted Successfully');
    }
}
