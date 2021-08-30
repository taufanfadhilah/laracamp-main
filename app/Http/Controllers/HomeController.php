<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Camp;
use Auth;

class HomeController extends Controller
{
    public function index()
    {
        $camps = Camp::with('CampBenefits')->orderBy('price', 'desc')->get();
        return view('welcome', [
            'camps' => $camps
        ]);
    }

    public function dashboard()
    {
        switch (Auth::user()->is_admin) {
            case true:
                return redirect(route('admin.dashboard'));
                break;
            
            default:
                return redirect(route('user.dashboard'));
                break;
        }
    }
}
