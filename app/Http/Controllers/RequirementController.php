<?php

namespace App\Http\Controllers;

use App\Requirement;
use App\Lang;
use App\Http\Requests\RequirementsRequest;

class RequirementController extends Controller
{
    public function index()
    {
        return view('admin.requirements.index', ['requirements'=>Requirement::orderby('id', 'ASC')->paginate('10')]);
    }

    public function create()
    {
        return view('admin.requirements.create', ['langs' => Lang::all()]);
    }

    public function store(RequirementsRequest $request,Requirement $requirement)
    {
        $requirement = new Requirement($request->all());
        $requirement->save();
        return  redirect('/requirement');
    }

    public function edit(Requirement $requirement)
    {
        return view('admin.requirements.edit', [
            'requirements'=> $requirement,
            'langs' => Lang::all(),
        ]);
    }

    public function update(RequirementsRequest $request, Requirement $requirement)
    {
        $requirement->update($request->all());
        return redirect('/requirement');
    }

    public function destroy(Requirement $requirement)
    {
        $requirement->delete();
        return redirect('/requirement');
    }
}
