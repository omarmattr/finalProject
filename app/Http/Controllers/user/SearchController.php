<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\store;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    function index(Request $request)
    {
        $search = $request->search;
        $categories = Category::where('name', 'like', '%' . $search . '%')->paginate(15);
        $stores = Store::where('name', 'like', '%' . $search . '%')->paginate(15);
        return view("user.search",compact('categories','stores'));
    }

    function login()
    {
        return redirect()->route('category');

    }
    function login1()
    {
        return view('user.home');

    }
}
