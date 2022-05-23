<?php

namespace App\Http\Controllers;

use App\Models\Travellog;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\File;

use Carbon\Carbon;


use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $checked = Travellog::latest()->where('user_id', Auth::user()->id)->whereNotNull('checkout')->get();
        $checkout = Travellog::latest()->where('user_id', Auth::user()->id)->whereNull('checkout')->get();
        $travellogs = Travellog::latest()->where('user_id', Auth::user()->id)->get();
        $timeline = Travellog::latest()->where('user_id', Auth::user()->id)->offset(0)->limit(4)->get();
        return view('Profile.index', compact('travellogs', 'checked', 'checkout', 'timeline'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'username' => ['unique:users,username,' . auth()->id(), 'string', 'max:255'],
            'name' => ['string', 'max:255'],
            'nik' => ['unique:users,nik,' . auth()->id(), 'numeric', 'digits:16'],
            'description' => ['string'],
            'email' => ['email', 'string', 'max:255', 'unique:users,email,' . auth()->id()],
        ]);

        request()->user()->update(
            [
                'username' => $request->input('username'),
                'name' => $request->input('name'),
                'nik' => $request->input('nik'),
                'description' => $request->input('description'),
            ]
        );

        if ($request->input('email') == Auth::user()->email) {
            $request->user()->update(['email' => $request->input('email')]);
        } else {
            $request->user()->update(['email' => $request->input('email')]);
            $request->user()->update(['email_verified_at' => null]);
            $request->user()->sendEmailVerificationNotification();
        }

        return redirect()->route('Profile.index');
    }

    public function changeAvatar(Request $request)
    {
        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|',

        ]);

        $user = Auth::user();
        if ($avatar = $request->file('avatar')) {
            $destinationPath = 'avatars/';
            $avatar_path = public_path("avatars/" . $user->avatar);
            if (File::exists($avatar_path)) {
                File::delete($avatar_path);
            }
            $profileavatar = date('YmdHis') . "." . $avatar->getClientOriginalExtension();
            $avatar->move($destinationPath, $profileavatar);

            $request->user()->avatar = $profileavatar;
            $request->user()->save();
        } else {
            unset($user->image);
        }
        return redirect()->route('Profile.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
