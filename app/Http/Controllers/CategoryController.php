<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = category::withCount("numOfStores")->paginate(2);
//        dd($categories);
        return view("category.index", compact('categories'));
    }

    public function indexUser()
    {
        $categories = category::paginate(4);
//        dd($categories);
        return view("user.category", compact('categories'));
    }

    public function create()
    {
        return view("category.create");
    }


    public function store(CategoryRequest $request)
    {
        $image = $request->file('image');
        $catName = $request->name;
        $path = 'public/uploads/images/category/';
        $name = time() . rand(1, 100000000) . '.' . $image->getClientOriginalExtension();
        //  dd("kkkkk");
        Storage::disk('local')->put($path . $name, file_get_contents($image));
        $category = new Category();
        $category->name = $catName;
        $category->image = $path . $name;
        $category->save();
        return redirect()->route('category');
    }


    public function show(Category $category)
    {
        //
    }


    public function edit($id)
    {
        $category = category::where('id', $id)->first();
//        dd($category);
        return view("category.edit", compact('category'));
    }


    public function update(CategoryRequest $request, $id)
    {
        $category = category::where('id', $id)->first();

        $image = $request->file('image');
        $path = 'public/uploads/images/category/';
        $name = time() . rand(1, 100000000) . '.' . $image->getClientOriginalExtension();
        //  dd("kkkkk");
        Storage::disk('local')->put($path . $name, file_get_contents($image));
        Storage::disk('local')->delete($category->image);
        $category->name = $request->name;
        $category->image = $path . $name;
        $category->save();
        return redirect()->route('category');
    }


    public function destroy($id)
    {
        $category = category::where('id', $id);
        Storage::disk('local')->delete($category->first()->image);
        $category->delete();
        return redirect()->back();
    }
}
