<?php

namespace App\Http\Controllers;

use App\CategoryHotel;
use Illuminate\Http\Request;

class CategoryHotelController extends Controller
{
    public function index()
    {
        return view('admin.category-hotels.index', ['categories'=>CategoryHotel::orderby('category_hotel_name', 'ASC')->paginate('6')]);
    }
    
    public function create()
    {
        return view('admin.category-hotels.create');
    }
    
    public function store(Request $request)
    {
        $category = new CategoryHotel($request->all());
        $category->save();  
        return  redirect('/category-hotels');
    }
    
    public function edit(CategoryHotel $categoryHotel)
    {
        return view('admin.category-hotels.edit',['categories'=>$categoryHotel]);
    }
    
    public function update(Request $request, CategoryHotel $categoryHotel)
    {
        $categoryHotel->update($request->all());
        return redirect('/category-hotels');
    }
    
    public function destroy(CategoryHotel $categoryHotel)
    {
        $categoryHotel->delete();
        return redirect('/category-hotels');
    }

    /********NO SE USA*********/
    // public function show(CategoryHotel $categoryHotel)
    // {
    //      return view('admin.category-hotels.show', ['categories'=>$categoryHotel]);
    // }
}
