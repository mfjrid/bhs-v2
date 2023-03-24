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
        return view('request.index');
    }

    public function mine()
    {
        return view('request.mine');
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
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('add-request')->with('success', 'We have received your request');
    }


    public function destroy()
    {
        return redirect()->route('requests')->with('success', 'Your request has been deleted');
    }
}
