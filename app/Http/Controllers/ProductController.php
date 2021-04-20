<?php

namespace App\Http\Controllers;

use App\Product;
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
        //
        $products = Product::all();
        return view('index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        // $product->qauntity = $request->qauntity;
        $product->save();
        return redirect('/index');
    }

    public function tobil(Request $request)
    {
        $qtys = $request->qty;
        $pids = $request->pid;

        foreach($qtys as $qkey => $qt) {
            if($qt!=0){
                foreach ($pids as $pkey => $pid) {
                    if($qkey == $pkey){
                        $billData = array(
                            'pid'=>$pid,
                            'qty'=>$qt
                        );
                        DB::table('bills')->insert($billData);
                    }
                }
            }
        }

        return redirect('/quotation');
    }


    public function getQoutation()
    {
        // $qoutes = DB::table('products')
        //     ->join('bills', 'products.id', '=', 'bills.pid')
        //     ->select('products.*', 'bills.qty')
        //     ->get();

         $qoutes =   DB::table('products')
        ->join('bills', function ($join) {
            $join->on('products.id', '=', 'bills.pid')
                 ->where('bills.deleted_at', '=', null);
        })
        ->get();

        return view('quotation',compact('qoutes'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
