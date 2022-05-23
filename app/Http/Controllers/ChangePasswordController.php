<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Travellog;
use Carbon\Carbon;

class ChangePasswordController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('changePassword');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function store(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        User::find(auth()->user()->id)->update(['password' => Hash::make($request->new_password)]);
        $checkout = Travellog::whereDate('created_at', Carbon::today())->where('user_id', Auth::user()->id)->whereNull('checkout')->get();
        $checkin = Travellog::whereDate('created_at', Carbon::today())->where('user_id', Auth::user()->id)->whereNotNull('checkout')->get();
        $travellogs = Travellog::latest()->where('user_id', Auth::user()->id)->offset(0)->limit(4)->get();
        $total = Travellog::latest()->where('user_id', Auth::user()->id)->get();
        return view('Dashboard', compact('travellogs', 'checkin', 'checkout', 'total'));
    }
}
