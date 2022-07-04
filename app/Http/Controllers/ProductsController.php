<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('frontend.website.product', compact('products'));
    }
    public function admin()
    {
        $products = Product::all();
        return view('backend.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
        return view('backend.products.create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $products = new Product();
        $products->product_name = $request->product_name;
        $products->product_image = $request->product_image;
        $products->product_price = $request->product_price;
        $products->product_quantity = $request->product_quantity;
        $products->product_descript = $request->product_descript;
        $products->category_id = $request->category_id;
        $products->save();
        return redirect()->route('backend.products.index')->with('success','Thêm'. ' ' . $request->product_name.' '.  'thành công');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
    {
        $product = Product::find($id);

        $params = [
            'product'=> $product,

        ];
        return view('frontend.website.detail',$params);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        $params = [
            'product'=> $product
        ];
        return view('backend.products.show',$params);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $params = [
            'product'=> $product
        ];
        return view('backend.products.edit',$params);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        
        Product::find($id)->update($request->only('product_name'));
        return redirect()->route('backend.products.index')->with('success', 'Sửa sản phẩm'. ' ' . $request->name.' ' .'thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('backend.products.index')->with('success','Xóa sản phẩm thành công');
    }
}
