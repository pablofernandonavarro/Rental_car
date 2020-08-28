<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;
use App\Http\Requests\BrandsRequest;
use Illuminate\Support\Facades\DB;
use App\Car;

class BrandController extends Controller
{
    public function index()
    {
        return view('admin.brands.index', ['brands'=>Brand::orderby('brand_name', 'ASC')->paginate('12')]);
    }

    public function create()
    {
        return view('admin.brands.create');
    }

    public function store(BrandsRequest $request)
    {
        $brand= new Brand($request->all());
        $brand->save();
        return  redirect('/brand');
    }
    
    public function edit(Brand $brand)
    {
        return view('admin.brands.edit',['brands'=>$brand]);
    }
    
    public function update(BrandsRequest $request, Brand $brand)
    {
        $brand->update($request->all());
        return redirect('/brand');
    }
    
    public function destroy(Brand $brand)
    {    
        $brand->delete();
             return redirect('/brand');
   
    }               

}





