<?php

namespace App\Http\Controllers;

use App\Services\Customer\GetDuplicatedCustomerService;
use App\Services\Customer\GetMatchedCustomer;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $matchedCustomer = (new GetMatchedCustomer())->get();

        // get data with duplicates and pass to view
        $unMatchedCustomer = (new GetDuplicatedCustomerService())->get();

        return view('home', compact('matchedCustomer', 'unMatchedCustomer'));
    }
}
