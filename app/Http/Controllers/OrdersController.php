<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();
        return view('backend.orders.index', compact('orders'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $orders = Order::all();
        return view('backend.orders.create', compact('orders'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $orders = new Order();
        $orders->name = $request->name;
        $orders->phone = $request->phone;
        $orders->address = $request->address;
        $orders->email = $request->email;
        $orders->birthday = $request->birthday;
        $orders->save();
        return redirect()->route('backend.orders.index')->with('success','Thêm'. ' ' . $request->name.' '.  'thành công');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


        $order = Order::find($id);
        $params = [
            'order' => $order
        ];
        return view('backend.orders.index',$params);
        
            
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::find($id);
        $params = [
            'order' => $order
        ];
        return view('backend.orders.edit',$params);


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

        Order::find($id)->update($request->only('name'));
        return redirect()->route('backend.orders.index')->with('success', 'Sửa đơn hàng'. ' ' . $request->name. ' '. 'thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


        $order = Order::find($id);
        $order->delete();
        return redirect()->route('backend.orders.index')->with('success', 'Xóa đơn hàng thành công');
    }
}
