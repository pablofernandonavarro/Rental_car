<?php

namespace App\Http\Controllers;

use App\Transmission;
use Illuminate\Http\Request;
use App\Http\Requests\TransmissionsRequest;

class TransmissionController extends Controller
{
    public function index()
    {   
        return view('admin.transmissions.index', ['transmissions'=>Transmission::orderby('transmission_name', 'ASC')->paginate('6')]);
    }

    public function show(Transmission $transmission)
    {
        return view('admin.transmissions.show', ['transmissions'=>$transmission]);
    }

    public function create()
    {
        return view('admin.transmissions.create');
    }

    public function store(TransmissionsRequest $request)
    {
        $transmission = new Transmission($request->all());
        $transmission->save();  
        return  redirect('/transmission');
    }
    
    public function edit(Transmission $transmission)
    {
        return view('admin.transmissions.edit', ['transmissions'=>$transmission]);
    }

    public function update(Request $request, Transmission $transmission)
    {
        $transmission->update($request->all());
        return reirect('/transmission');
    }

    public function destroy(Transmission $transmission)
    {    
        $transmission->delete();
        return redirect('/transmission');
    }
}
