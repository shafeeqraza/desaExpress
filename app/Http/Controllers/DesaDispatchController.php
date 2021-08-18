<?php

namespace App\Http\Controllers;

use App\Models\DesaDispatch;
use Illuminate\Http\Request;

class DesaDispatchController extends Controller
{
    public function index()
    {
        return view("desa-dispatcher.index");
    }

    public function profile()
    {
        return view("desa-dispatcher.profile");
    }


    public function dispatches()
    {
        return view("desa-dispatcher.dispatches");
    }

    public function create()
    {
        return view("desa-dispatcher.create");
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        return view("desa-dispatcher.show");
    }

    public function map($id)
    {
        return view("desa-dispatcher.map");
    }

    public function edit($id)
    {
        return view("desa-dispatcher.edit");
    }



    public function update(Request $request, $id)
    {
        //
    }



    public function destroy($id)
    {
        //
    }
}
