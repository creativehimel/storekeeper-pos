<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Product;
use App\Models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sales = Sale::with('product', 'customer')->get();
        return view('pages.sale.index', ['sales' => $sales]);
        //return $sales;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = Product::all();
        $customers = Customer::all();
        return view('pages.sale.create', ['products' => $products, 'customers' => $customers]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = Product::findOrFail($request->product_id);
        $soldQty = $request->quantity;
        $totalAmount = $product->price * $soldQty;
        if ($soldQty <= $product->quantity){
            Sale::create([
                'product_id' => $request->product_id,
                'customer_id' => $request->customer_id,
                'quantity' => $soldQty,
                'total_amount' => $totalAmount
            ]);
            $product->decrement('quantity', $soldQty);
            return redirect()->route('sales.index')->with('message', 'Product Sold Successfully');
        }else{
            return redirect()->route('sales.create')->with('message', 'Number of Product quantity not available');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
