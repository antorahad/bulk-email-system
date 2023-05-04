<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Customer;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function add(Customer $request){
        DB::table('customers')->insert($request->except('_token'));
        return back();
    }
}
