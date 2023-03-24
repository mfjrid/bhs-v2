<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function index()
    {
        return view('request.index');
    }

    public function mine()
    {
        return view('request.mine');
    }

    public function add()
    {
        return view('request.add');
    }

    public function store()
    {
        return view('request.index');
    }

    public function destroy()
    {
        return view('request.index');
    }
}
