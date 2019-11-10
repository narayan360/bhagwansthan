<?php

namespace App\Http\Controllers\Admin;

use App\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $data['orders'] = Order::where('collection_date_time', '>=', date('Y-m-d'))->orderBy('collection_date_time')->take(5)->get();
        return view('admin.dashboard',$data);
    }

    public function phpinfo()
    {
    	phpinfo();
    }

}
