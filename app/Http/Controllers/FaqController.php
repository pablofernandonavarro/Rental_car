<?php

namespace App\Http\Controllers;

use App\Faq;
use App\CategoryFaq;
use App\Http\Requests\FaqsRequest;

class FaqController extends Controller
{
    public function index()
    {
        return view('admin.faqs.index', ['faqs'=>Faq::orderby('category_id', 'ASC')->paginate('8')]);
    }

    public function show(Faq $faq)
    {
        return view('admin.faqs.index', ['faqs'=>$faq]);
    }

    public function create()
    {
        return view('admin.faqs.create', ['category_faqs'=>CategoryFaq::all()]);

    }

    public function store(FaqsRequest $request,faq $faq)
    {   
       
        $faqs = new Faq($request->all());
        $faqs->save();
        return  redirect('/faq');
    }

    public function edit(Faq $faq)
    {  
        return view('admin.faqs.edit', ['faqs'=>$faq], ['category_faqs'=>CategoryFaq::all()]);
    }

    public function update(FaqsRequest $request, Faq $faq)
    {  
        $faq->update($request->all());
        return redirect('/faq');
    }

    public function destroy(Faq $faq)
    {
        $faq->delete();
        return redirect('/faq');
    }
}
