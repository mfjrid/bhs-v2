<?php

namespace App\Http\Controllers;

use App\Models\Qualities;
use App\Models\Categories;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Request as ModelsRequest;

class RequestController extends Controller
{
    public function index()
    {
        $requests = ModelsRequest::all();
        return view('request.index', [
            'requests' => $requests
        ]);
    }

    public function mine()
    {
        $requests = ModelsRequest::where('user_id', '=', Auth::id())->get();
        return view('request.mine', [
            'requests' => $requests
        ]);
    }

    public function add()
    {
        $category = Categories::all();
        $quality = Qualities::all();

        return view('request.add', [
            'categories' => $category,
            'qualities' => $quality
        ]);
    }

    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'category_id' => 'required',
            'quality_id' => 'required',
            'url' => 'required|url',
            'message' => 'max:100',
        ]);

        ModelsRequest::create([
            'uuid' => Str::uuid(),
            'category_id' => $request->category_id,
            'quality_id' => $request->quality_id,
            'url' => $request->url,
            'message' => $request->message,
            'status_id' => 1,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('add-request')->with('success', 'We have received your request');
    }


    public function destroy()
    {
        return redirect()->route('requests')->with('success', 'Your request has been deleted');
    }
}
