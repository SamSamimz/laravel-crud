<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ViewErrorBag;

class usercontroller extends Controller
{
    //index
    public function index() {
        $customer = Customers::all();
        // $customerdata = compact('customer');
        return view('customers', [
            'data' => $customer,
        ]);
    }
    //add
    public function add() {
        return view('add');
    }
    //store 
    public function store (Request $request) {
        //validation for empty | others 
        $request->validate(
            [
                'name' => 'required|max:50',
                'address' => 'required',
                'age' => 'required',
                'phone' => 'required',
            ]
        );
        DB::table('customers')->insert([
            'name' => $request->name,
            'address' => $request->address,
            'age' => $request->age,
            'birth' => $request->birthdate,
            'phone' => $request->phone,
        ]);


        return view('add',[
            'success' => 'Customer added successfully !'
        ]);
    }
    //delete 
    public function delete ($id) {
        $customer = Customers::find($id);
        if(!is_null($customer)) {
            $customer->delete();
            return redirect('user');
        }else {
            abort('404');
        }
    }
}
