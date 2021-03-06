<?php

namespace App\Http\Controllers;

use App\History;
use App\Product;
use Illuminate\Http\Request;
use Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $v = Validator::make($request->all(), [
            'name' => 'required|unique:products',
            'quantity' => 'required|min:1',
        ]);

        if ($v->fails()) {
            return back()->withErrors($v->errors());
        }

        Product::create($request->all());

        return redirect('products')->with('msg', 'Creado correctamente');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        return redirect('products')->with('msg', 'Editado correctamente', 200);
    }

    public function addProduct($id)
    {
        $product = Product::find($id);
        $product->addProduct();
        return response()->json(['message' => 'Actualizado correctamente'], 200);
    }

    public function deductProduct($id)
    {
        $product = Product::find($id);
        $product->deductProduct();
        return response()->json(['message' => 'Actualizado correctamente']);
    }
}
