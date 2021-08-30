<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Camp;

class HomeController extends Controller
{
    public function index()
    {
        $camps = Camp::with('CampBenefits')->orderBy('price', 'desc')->get();
        return view('welcome', [
            'camps' => $camps
        ]);
    }
}
