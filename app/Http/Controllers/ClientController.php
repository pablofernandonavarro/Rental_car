<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        return view('admin.clients.index',['clients'=> Client::paginate(10)]);
    }

    public function create()
    {
        return view('admin.clients.create');
    }

    public function store(Request $request)
    {
        $client= new Client($request->all());
        $client->save();
        return  redirect('/client');
    }

    public function show(Client $client)
    {
        return view('admin.clients.show', ['clients'=>$client]);
    }

    public function edit(Client $client)
    {
        return view('admin.clients.edit',['clients'=>$client]);
    }

    public function update(Request $request, Client $client)
    {
      $client->update($request->all());
        return redirect('/client');
    }

    public function destroy(Client $client)
    {
        $client->delete();
        return redirect('/client');
    }
}
