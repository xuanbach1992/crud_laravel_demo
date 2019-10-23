<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function indexCustomer()
    {
        return view("customer.index");
    }

    public function show()
    {
        $customers = Customer::all();
        return view("customer.list", compact("customers"));
    }

    public function create()
    {
        return view("customer.create");
    }

    public function createSucces(Request $request)
    {
        $customers = Customer::all();
        $customers = new Customer();
        $customers->name = $request->name;
        $customers->address = $request->address;
        $customers->email = $request->email;
        $customers->save();
        return redirect()->route("customer.show");
    }

    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();
        return redirect()->route("customer.show");
    }
    public function edit($id){
        $customer = Customer::findOrFail($id);
        return view("customer.update",compact("customer"));
    }
    public function update(Request $request,$id){
        $customer = Customer::findOrFail($id);
        $customer->name=$request->name;
        $customer->address=$request->address;
        $customer->email=$request->email;
        $customer->save();
        return redirect()->route("customer.show");
    }

}
