<?php

namespace App\Http\Controllers;

use App\Models\DesaDispatch;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class DesaLoaderController extends Controller
{


    public function profile()
    {
        $user = auth()->user();
        return view("desa-loader.index", [
            "user" => $user,
        ]);
    }


    public function updateProfile(Request $request)
    {
        $updateprofile = User::find(auth()->id());
        // return $request->all();
        $updateprofile->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'zip_code' => $request->zip_code,
            'city' => $request->city,
            'country' => $request->country,
            'state' => $request->state,
        ]);
        Session::flash('success', 'This is a message!');
        return redirect()->back();
    }


    public function loads()
    {
        $dispatches = DesaDispatch::whereIn("booked", [0, "0"])->get();

        return view("desa-loader.loads", [
            "dispatches" => $dispatches,
        ]);
    }


    public function myLoads()
    {
        $myLoads = DesaDispatch::where([
            "driver_name" => auth()->user()->first_name . ' ' . auth()->user()->last_name,
            "booked" => '1'
        ])->get();

        $dispatch = new DesaDispatch();

        $progressLength = $dispatch->progressDispatch()->count();
        $completedLength = $dispatch->completedDispatch()->count();

        return view("desa-loader.myLoads", [
            "myLoads" => $myLoads,
            'progressLength' => $progressLength,
            "completedDispatch" => $completedLength
        ]);
    }


    public function show($id)
    {
        $load = DesaDispatch::where([
            'id' => $id,
        ])->get()->first();
        return view("desa-loader.show", [
            "load" => $load,
        ]);
    }

    public function map($id)
    {
        return view("desa-loader.map");
    }

    public function book(Request $request, $id)
    {
        $dispatch = DesaDispatch::find($id);
        // return $dispatch;
        $dispatch->booked = 1;
        $dispatch->driver_name = auth()->user()->first_name . ' ' . auth()->user()->last_name;
        $dispatch->status = "progress";
        $dispatch->save();
        return redirect()->route("desa.loader.loads")->with("status", "Load has been booked!");
    }



    public function statusChange(Request $request, $id)
    {
        $dispatch = DesaDispatch::find($id);
        $dispatch->status = $request->status;
        $dispatch->save();

        Session::flash("success", "Load has been changed");
        return redirect()->route("desa.loader.my-loads");

    }

}
