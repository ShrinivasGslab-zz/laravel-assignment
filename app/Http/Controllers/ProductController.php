<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductDetails;
use Illuminate\Http\Request;
use DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = DB::table('products')
            ->join('product_details', 'products.id', '=', 'product_details.product_id')
            ->select('products.id','products.name', 'products.sku', 'product_details.stock', 'product_details.type')
            ->whereNull('products.deleted_at')
            ->get();
        return view('prodctindex', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createprod');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storeData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:255',
            'sku' => 'required|numeric',
            'status' => 'required|max:255',
            'stock' => 'required',
            'type' => 'required',
            'size' => 'required',
        ]);
        $product = Product::create($storeData);
        $storeData['product_id'] = $product->id;
        $productdetails = ProductDetails::create($storeData);
        

        return redirect('/products')->with('completed', 'Product has been saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $productdetails = ProductDetails::where('product_id', $id)->firstOrFail();
        return view('editprod', compact('product','productdetails'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updateData = $request->validate([
           'name' => 'required|max:255',
            'description' => 'required|max:255',
            'sku' => 'required|numeric',
            'status' => 'required|max:255',
            'stock' => 'required',
            'type' => 'required',
            'size' => 'required',
        ]);
        $chunks = array_chunk($updateData,4, true);
        Product::whereId($id)->update($chunks[0]);
        ProductDetails::where('product_id', $id)->update($chunks[1]);
        return redirect('/products')->with('completed', 'Product has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect('/products')->with('completed', 'Product has been deleted');
    }
}
