<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class ProductsController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        $categories = Category::pluck('name', 'id');
        return view('admin.product.create',compact('categories'));
    }

    public function store(Request $request)
    {
        $formInput = $request->except('image');
        // image upload
        $image = $request->image;     //data nya
        if($image){
            $imageName = $image->getClientOriginalName();  // nama nya
            $image->move('images',$imageName);   // masukkan data di folder images dan beri nama $imageName
            $formInput['image'] = $imageName;    // (jika ada file image)ngasih tau inputan file ini namanya $imageName
        }

        Product::create($formInput);
        return redirect()->route('admin.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
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
