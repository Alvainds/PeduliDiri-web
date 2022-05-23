<?php

namespace App\Http\Controllers;

use App\Models\Travellog;
use App\Models\districts;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TravellogController extends Controller
{
    public function index(Request $request)
    {
        $checked = Travellog::whereDate('created_at', Carbon::today())->where('user_id', Auth::user()->id)->whereNotNull('checkout')->get();
        $checkout = Travellog::whereDate('created_at', Carbon::today())->where('user_id', Auth::user()->id)->whereNull('checkout')->get();
        $monthLog = Travellog::whereMonth('created_at', date('m'))->where('user_id', Auth::user()->id)->get();
        $todayLog = Travellog::whereDate('created_at', Carbon::today())->where('user_id', Auth::user()->id)->get();
        $travellogs = Travellog::latest()->where('user_id', Auth::user()->id)->get();
        return view('travellog.index', compact('travellogs', 'checked', 'todayLog', 'checkout', 'monthLog'));
    }

    public function create()
    {
        $districts = DB::table('districts')->pluck('dis_name');
        return view('travellog.create', compact('districts'));
    }

    public function show($id)
    {
        $travellog = Travellog::find($id);
        return view('travellog.show', compact('travellog'));
    }

    public function edit($id)
    {
        $districts = DB::table('districts')->pluck('dis_name');
        $travellog = Travellog::find($id);
        return view('travellog.edit', compact('travellog', 'districts'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'date' => 'required',
            'location' => 'required',
            'checkin' => 'required',
            'keterangan' => 'required',
            'temperature' => ['required', 'int'],
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',

        ]);


        $log = Travellog::find($id);

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $image_path = public_path("images/" . $log->image);
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $log->image = "$profileImage";
        } else {
            unset($log->image);
        }

        $log->date = $request->input('date');
        $log->checkin = $request->input('checkin');
        $log->checkout = Carbon::parse($request->input('checkout'))->format('Y-m-d h:i:s');
        $log->location = $request->input('location');
        $log->temperature = $request->input('temperature');
        $log->keterangan = $request->input('keterangan');
        $log->save();

        return redirect()->route('Travellog.index')
            ->with('success', 'Travellog updated successfully');
    }

    public function destroy($id)
    {
        $temp = Travellog::findOrFail($id);
        unlink("images/" . $temp->image);
        $temp->delete();


        if ($temp) {
            return redirect()
                ->route('Travellog.index')
                ->with([
                    'success' => 'Travel Log has been deleted successfully'
                ]);
        } else {
            return redirect()
                ->route('Travellog.index')
                ->with([
                    'error' => 'Some problem has occurred, please try again'
                ]);
        }
    }

    public function store(Request $request)
    {
        request()->validate(
            [

                'location' => 'required',
                'temperature' => ['required', 'int'],
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            ],
            [
                'location.required' => 'Silahkan tambahkan lokasi',
                'image' => 'Format Gambar Salah',
            ]
        );

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        $perjalanan_data = [
            'user_id' => Auth::user()->id,
            'location' => $request->input('location'),
            'date' =>  Carbon::now(),
            'checkin' => Carbon::now(),
            'temperature' => $request->input('temperature'),
            'keterangan' => $request->input('keterangan'),
            'image'       =>  $imageName,
        ];

        Travellog::create($perjalanan_data);

        return redirect()->route('Travellog.index')
            ->with('success', 'Travel Log Checked successfully.');
    }

    public function update_checkout(Request $request, Travellog $id)
    {
        $id->update([
            'checkout' => Carbon::now(),

        ]);

        // $data = Travellog::find($travellog);
        // $data->update(['checkout' => Carbon::now()]);

        return redirect()->route('Travellog.index')
            ->with('success', 'Travel Log Checked successfully');
    }
}
