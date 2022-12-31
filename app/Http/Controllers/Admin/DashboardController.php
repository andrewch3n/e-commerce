<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Product, Category, Brand, Order, User};
use Illuminate\Support\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $totalProducts = Product::count();
        $totalCategories = Category::count();
        $totalBrands = Brand::count();

        $totalAllUsers = User::count();
        $totalUser = User::where('role_as', '0')->count();
        $totalAdmin = User::where('role_as', '1')->count();

        $todayDate = Carbon::now()->format('Y-m-d');
        $thisMonth = Carbon::now()->format('m');
        $thisYear = Carbon::now()->format('Y');

        $totalOrder = Order::count();
        $todayOrder = User::whereDate('created_at', $todayDate)->count();
        $thisMonthOrder = User::whereMonth('created_at', $thisMonth)->count();
        $thisYearOrder = User::whereMonth('created_at', $thisYear)->count();

        return view('admin.dashboard', compact('totalProducts', 'totalCategories', 'totalBrands', 'totalAllUsers', 'totalUser', 'totalAdmin', 'totalOrder', 'todayOrder', 'thisMonthOrder', 'thisYearOrder'));
    }
}