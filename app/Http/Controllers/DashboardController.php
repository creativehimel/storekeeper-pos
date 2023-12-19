<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $sales = Sale::with('product', 'customer')->get();
        $salesToday = Sale::whereDate('created_at', Carbon::today())->sum('total_amount');
        $salesYesterday = Sale::whereDate('created_at', Carbon::yesterday())->sum('total_amount');
        $salesThisMonth = Sale::whereMonth('created_at', Carbon::now()->month)->sum('total_amount');
        $salesLastMonth = Sale::whereMonth('created_at', Carbon::now()->subMonth()->month)->sum('total_amount');
        return view('pages.dashboard', ['salesToday' => $salesToday, 'salesYesterday' => $salesYesterday, 'salesThisMonth' => $salesThisMonth, 'salesLastMonth' => $salesLastMonth, 'sales' => $sales]);
    }
}
