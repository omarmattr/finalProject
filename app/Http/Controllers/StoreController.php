<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use App\Models\Category;
use App\Models\store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{


    public function index()
    {
        $stores = store::with("rating")->paginate(2);
//        dd($categories);
        return view("store.index", compact('stores'));
    }
    public function indexUser()
    {
        $stores = store::paginate(4);
//        dd($categories);
        return view("user.home", compact('stores'));
    }

    public function create()
    {
        $categories= Category::all();
        return view("store.create", compact('categories'));
    }

    public function store(StoreRequest $request)
    {
        $image = $request->file('image');
        $path = 'public/uploads/images/store/';
        $name = time() . rand(1, 100000000) . '.' . $image->getClientOriginalExtension();
        //  dd("kkkkk");
        Storage::disk('local')->put($path . $name, file_get_contents($image));
        $store = new Store();
        $store->name = $request->name;
        $store->description = $request->description;
        $store->categoryId = $request->categoryId;
        $store->image = $path . $name;
        $store->save();
        return redirect()->route('store');
    }

    public function show(store $store)
    {
        //
    }


    public function edit($id)
    {
        $store = store::where('id', $id)->first();
        $categories= Category::all();
        return view("store.edit", compact('categories','store'));    }

    public function update(StoreRequest $request,$id)
    {
        $store = store::where('id', $id)->first();

        if ($request->hasFile("image")) {
            $image = $request->file('image');
            $path = 'public/uploads/images/store/';
            $name = time() . rand(1, 100000000) . '.' . $image->getClientOriginalExtension();
            //  dd("kkkkk");
            Storage::disk('local')->put($path . $name, file_get_contents($image));
            Storage::disk('local')->delete($store->image);
            $store->image = $path . $name;
        }

        $store->name = $request->name;
        $store->categoryId= $request->categoryId;
        $store->save();
        return redirect()->route('store');    }

    public function destroy($id)
    {
        $store = store::where('id', $id);
        Storage::disk('local')->delete($store->first()->image);
        $store->delete();
        return redirect()->back();
    }
}
