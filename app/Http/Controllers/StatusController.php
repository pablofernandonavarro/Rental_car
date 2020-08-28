<?php

namespace App\Http\Controllers;

use App\Status;
use Illuminate\Http\Request;
use App\Http\Requests\StatusesRequest;


class StatusController extends Controller
{
   
    public function index()
    {
        return view('admin.statuses.index', ['statuses'=>Status::orderby('status_name', 'ASC')->paginate('6')]);
    }

    public function create()
    {
        return view('admin.statuses.create');
    }
    
    public function store(StatusesRequest $request)
    {
        $status= new Status($request->all());
        $status->save();  
        return  redirect('/status');
    }
    
    public function edit(Status $status)
    {  
        return view('admin.statuses.edit', ['statuses'=>$status]);
    }
    
    public function update(Request $request, Status $status)
    {
        $status->update($request->all());
        return redirect('/status');
    }
    
    public function destroy(Status $status)
    {
        $status->delete();
        return redirect('/status');
    }

    /********NO SE USA*********/
    // public function show(Status $status)
    // {
    //     return view('admin.statuses.show', ['statuses'=>$status]);
    // }
}