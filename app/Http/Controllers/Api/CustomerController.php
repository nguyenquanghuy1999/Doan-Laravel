<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Customers;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return api_success(
            array('data' => Customers::all())
        );
    }

    public function show($id)
    {
        $customer = Customers::findOrFail($id);
        return api_success(
            array('data' => $customer)
        );
    }

    
}
