<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Checkout;
class DashboardController extends Controller
{
    public function index()
    {
        $checkouts = Checkout::with(['Camp', 'User'])->orderBy('is_paid', 'asc')->get();
        return view('admin.dashboard', [
            'checkouts' => $checkouts
        ]);
    }
}
