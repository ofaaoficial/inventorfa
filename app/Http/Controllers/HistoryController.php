<?php

namespace App\Http\Controllers;

use App\History;
use Illuminate\Http\Request;
use App\Product;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $history = History::all()->sortByDesc('id');
        return view('history.index', compact('history'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\History  $history
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('history.show', compact('product'));
    }
}
