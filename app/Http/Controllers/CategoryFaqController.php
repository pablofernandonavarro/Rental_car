<?php

namespace App\Http\Controllers;

use App\CategoryFaq;
use Illuminate\Http\Request;

class CategoryFaqController extends Controller
{

    public function index()
    {
        return view('admin.category-faqs.index', ['category_faqs'=>CategoryFaq::orderby('category_faq_name', 'ASC')->paginate('12')]);
    }


    public function create()
    {
        return view('admin.category-faqs.create');
    }

    public function store(Request $request)
    {
        $category = new CategoryFaq($request->all());
        $category->save();
        return  redirect('/category-faqs');
    }

    public function edit(CategoryFaq $categoryFaq)
    {
        return view('admin.category-faqs.edit',['categories'=>$categoryFaq]);
    }

    public function update(Request $request, CategoryFaq $categoryFaq)
    {
        $categoryFaq->update($request->all());
        return redirect('/category-faqs');
    }

    public function destroy(CategoryFaq $categoryFaq)
    {
        $categoryFaq->delete();
        return redirect('/category-faqs');
    }

    /********NO SE USA*********/
    // public function show(CategoryFaq $categoryFaq)
    // {
    //      return view('admin.category-faqs.show', ['categories'=>$categoryFaq]);
    // }
}
