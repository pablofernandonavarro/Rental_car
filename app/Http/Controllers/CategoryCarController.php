<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\CategoryCar;
use App\Http\Requests\CategoriesCarRequest;

class CategoryCarController extends Controller
{
    public function index()
    {
        return view('admin.category-cars.index', ['categories'=>CategoryCar::orderby('category_car_name', 'ASC')->paginate('6')]);
    }
    
    public function create()
    {
        return view('admin.category-cars.create');
    }
    
    public function store(CategoriesCarRequest $request,CategoryCar $categoryCar)
    {
        $category= new CategoryCar($request->all());
        $category->save();  
        return  redirect('/category-cars');
    }
    
    function edit(CategoryCar $categoryCar)
    {
        return view('admin.category-cars.edit',['categories'=>$categoryCar]);
    }
    
    public function update(CategoriesCarRequest $request, CategoryCar $categoryCar)
    {
        $categoryCar->update($request->all());
        return redirect('/category-cars');
    }
    
    public function destroy(CategoryCar $categoryCar)
     { 
        
        $categoryCar->delete();
            return redirect('/category-cars');
    }
    
    /********NO SE USA*********/
    // public function show(CategoryCar $categoryCar)
    // {
    //     return view('admin.category-cars.show', ['categories'=>$categoryCar]);
    // }
    
}
