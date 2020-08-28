@extends('layouts.admin-master')
@section('content')

<div class="container mt-2 mb-2 ">
  <div class="row">
    <div class="col-md-12">
      <!-- CONTENT AREA -->
      <div class="content-area">
        <!-- BREADCRUMBS -->
        <section class="page-section breadcrumbs text-center">
          <div class="container">
            <div class="page-header">
              <h1>Listado de Clientes</h1>
            </div>
            <ul class="breadcrumb">
              <li><a href="/index">Home</a></li>
              {{-- <li><a href="#">Pages</a></li> --}}
              <li class="active">Listado de Clientes</li>
            </ul>
          </div>
        </section>
        <!-- /BREADCRUMBS -->
        <table class="table table-hover table-sprited back-office-listing">
          <thead class="card-header">
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Edad</th>
            <th> Accion</th>
            <th><a href="{{route('client.create')}}" class="btn btn-submit btn-theme btn-theme-dark btn-block btn-create ">Crear</a></th>
          </thead>
          @foreach($clients as $client)
          <tbody>
            <td class="back-office-listing-id">{{$client->id}}</td>
            <td>{{$client->first_name}}</td>
            <td>{{$client->last_name}}</td>
            <td>{{$client->email}}</td>
            <td>{{$client->phone}}</td>
            <td>{{$client->age}}</td>
            {{-- <td class="back-office-listing-id">{{$car->passengerCuantity}}</td> --}}
            <td>
              <a href="{{ route ('client.edit',$client['id']) }}" class="btn btn-submit btn-theme btn-theme-dark ">Editar</a>
            </td>
            <td>
              <a href="{{ route ('client.destroy',$client['id']) }}"class="btn btn-submit btn-theme btn-theme-dark ">Borrar</a>
            </td>
            @endforeach
          </tbody>
        </table>
      </div>
      {!! $clients->render() !!}
    </div>
  </div>
</div>
@endsection
