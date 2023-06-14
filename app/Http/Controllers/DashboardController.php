<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Supplier;
use App\Models\Customer;
use App\Models\SalePerson;

class DashboardController extends Controller
{
    public function index() {
        $topCostCustomers = Customer::withCount('orders')->orderBy('orders_count', 'desc')->limit(10)->get();
        $topCountCustomers = Customer::withSum('orders', 'total')->orderBy('orders_sum_total', 'desc')->limit(10)->get();

        $totalSalePersonNet = SalePerson::withSum('orders', 'total')->orderBy('orders_sum_total', 'desc')->limit(3)->get();
        $totalSalePersonGross = SalePerson::withSum('orders', 'subtotal')->orderBy('orders_sum_subtotal', 'desc')->limit(3)->get();

        return view('pages.dashboard.index', compact('topCostCustomers', 'topCountCustomers', 'totalSalePersonNet', 'totalSalePersonGross'));
    }

    public function products() {
        $products = Product::all();
        return view('pages.dashboard.products', ['products' => $products]);
    }

    public function suppliers() {
        $suppliers = Supplier::withCount(['products'])->get();
        return view('pages.dashboard.suppliers', ['suppliers' => $suppliers]);
    }

    public function customers() {
        $customers = Customer::withCount(['orders'])->get();
        return view('pages.dashboard.customers', ['customers' => $customers]);
    }

    public function sales() {
        $sales = SalePerson::withCount(['orders'])->get();
        return view('pages.dashboard.sales', ['sales' => $sales]);
    }
}
