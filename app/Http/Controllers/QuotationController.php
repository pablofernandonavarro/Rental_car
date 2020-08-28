<?php

namespace App\Http\Controllers;
use App\CategoryCar;
use App\Quotation;
use Illuminate\Http\Request;

class QuotationController extends Controller
{
    public function index()
    {
        return view('admin.quotations.index',
        [
            'quotations'=> Quotation::orderby('created_at', 'DESC')->paginate('15'),
            'category_cars'=>CategoryCar::all()
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Quotation $quotation)
    {
        //
    }

    public function edit(Quotation $quotation)
    {
        //
    }

    public function update(Request $request, Quotation $quotation)
    {
        //
    }

    public function destroy(Quotation $quotation)
    {
        //
    }

    public function getDate(){
        return $this->date =$date;
    }
}
