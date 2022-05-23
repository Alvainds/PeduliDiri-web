<?php

namespace App\Http\Controllers;

use App\Models\Travellog;
use App\Models\Location;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $checkout = Travellog::whereDate('created_at', Carbon::today())->where('user_id', Auth::user()->id)->whereNull('checkout')->get();
        $checkin = Travellog::whereDate('created_at', Carbon::today())->where('user_id', Auth::user()->id)->whereNotNull('checkout')->get();
        $travellogs = Travellog::latest()->where('user_id', Auth::user()->id)->offset(0)->limit(4)->get();
        $total = Travellog::latest()->where('user_id', Auth::user()->id)->get();
        return view('Dashboard', compact('travellogs', 'checkin', 'checkout', 'total'));
    }
}
