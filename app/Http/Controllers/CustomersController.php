<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerRequest;
use App\Models\Customer;
use App\Models\Product;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::all();
        return view('backend.customers.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = Customer::all();
        return view('backend.customers.create', compact('customers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CustomerRequest $request)
    {
        $customers = new Customer();
        $customers->customer_name = $request->customer_name;
        $customers->customer_email = $request->customer_email;
        $customers->customer_phone = $request->customer_phone;
        $customers->customer_password = $request->customer_password;
        $customers->save();

        return redirect()->route('customers.index')->with('success', 'Thêm'. ' ' .  $request->customer_name. ' '. 'thành công');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = Customer::find($id);
        $prams = [
            'customer' => $customer,
        ];
        return view('backend.customers.show',$prams);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::find($id);
        $params = [
            'customer' => $customer,
        ];
        return view('backend.customers.edit', $params);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CustomerRequest $request, $id)
    {

        Customer::find($id)->update($request->only('customer_name'));
        return redirect()->route('customers.index')->with('success', 'Sửa sản phẩm'. ' '. $request->customer_name. ' '. 'thành công');

 



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customer::find($id);
        $customer->delete();
        
        
        return redirect()->route('customers.index')->with('success','Xóa khách hàng thành công');
    }
}
