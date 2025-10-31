<?php

namespace App\Http\Controllers\Admin;


use Carbon\Carbon;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function dashboard()
    {
        $data = [
            'blogCount' => DB::table('blog_posts')->where('status','publish')->count(),
            'researchPaperCount' => DB::table('research_papers')->where('status','active')->count(),
            'researcherCount' => DB::table('researchers')->where('status','active')->count(),
            'internCount' => DB::table('interns')->where('status','active')->count(),
        ];

        return view('admin.dashboard', $data);
    }

    public function getMonthlySalesData()
    {
        $monthlySales = DB::table('orders')
            ->select(DB::raw('DATE_FORMAT(order_created_at, "%Y-%m") as month'), DB::raw('SUM(total_amount) as total_sales'))
            ->whereNotNull('order_created_at')
            ->groupBy(DB::raw('DATE_FORMAT(order_created_at, "%Y-%m")'))
            ->orderBy('month')
            ->get();

        return $monthlySales;
    }
}
