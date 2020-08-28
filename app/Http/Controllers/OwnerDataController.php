<?php

namespace App\Http\Controllers;

use App\OwnerData;
use Illuminate\Http\Request;

class OwnerDataController extends Controller
{

    public function index()
    {
        return ['owner_data' => OwnerData::all()];
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(OwnerData $ownerData)
    {
        //
    }

    public function edit(OwnerData $ownerData)
    {
        //
    }

    public function update(Request $request, OwnerData $ownerData)
    {
        //
    }

    public function destroy(OwnerData $ownerData)
    {
        //
    }
}
