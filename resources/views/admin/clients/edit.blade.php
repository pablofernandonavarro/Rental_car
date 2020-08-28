@extends('layouts.admin-master')
@section('content')

<div class="container mt-2">
  <div class="row">
    <!-- CONTENT AREA -->
    <div class="content-area">
      <!-- BREADCRUMBS -->
      <section class="page-section breadcrumbs text-center">
        <div class="container">
          <div class="page-header">
            <h1>Editar Cliente</h1>
          </div>
          <ul class="breadcrumb">
            <li><a href="/index">Home</a></li>
            {{-- <li><a href="#">Pages</a></li> --}}
            <li class="active">Editar Cliente</li>
          </ul>
        </div>
      </section>
      <!-- BREADCRUMBS -->
      <div class="col-md-12">
        <div class="card ">
          <div class="card-body">

              {{-- @dd($clients) --}}

            <form action="/client/{{$clients->id}}" enctype="multipart/form-data" method="post">
                                @method('PUT')
                                @csrf
                                <div class="form-group col-md-6">
                                    <label for="">Nombre</label>
                                    <input type="text" class="form-control" name="first_name"
                                    value='{{$clients->first_name}}'>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">Apellido</label>
                                    <input type="text" class="form-control" name="last_name"
                                    value='{{$clients->last_name}}'>
                                </div>
                                    <div class="form-group col-md-4">
                                    <label for="">Email</label>
                                    <input type="text" class="form-control" name="email"
                                    value='{{$clients->email}}'>
                                </div>
                                </div>
                                    <div class="form-group col-md-4">
                                    <label for="">Teléfono</label>
                                    <input type="text" class="form-control" name="phone"
                                    value='{{$clients->phone}}'>
                                </div>
                                </div>
                                    <div class="form-group col-md-4">
                                    <label for="">Edad</label>
                                    <input type="text" class="form-control" name="age"
                                    value='{{$clients->age}}'>
                                </div>

                    <!-- BUTTONS -->
                    <div class=" form-group ">
                      <div class="back-office-buttons col-md-6">
                        <button type="submit" class="btn btn-submit btn-theme btn-theme-dark btn-block">Guardar</button>
                        <a href="{{app('request')->input('id')}}" class="btn btn-submit btn-theme btn-theme-dark btn-block ">Cancelar</a>
                      </div>
                      <div class=" form-group back-office-rigth-buttons col-md-6">
                        <a href="{{route('client.index')}}" class="btn btn-submit btn-theme btn-theme-dark btn-block ">Volver al Listado</a>
                        <a href="{{route('client.create')}}" class="btn btn-submit btn-theme btn-theme-dark btn-block ">Crear</a>
                        <form action="/clients/{{$clients->id}}" method="post" class="delete-element" >
                          @method('DELETE')
                          @csrf
                          <button class="btn btn-submit btn-theme btn-theme-dark btn-block" type="submit" name="{{$clients->clients_name}}">Borrar</button>
                      </form>
                      </div>
                    </div>
                    <!-- /BUTTONS -->
                  </form>
                </div>
              </div>
            </div>
            <!-- /CONTENT AREA -->
            <div>
              @if (count($errors->all())>0)
              <ul class="fluid alert alert-danger" role="alert">
                @foreach ($errors->all() as $error)
                <li>{{$error}} </li>
                @endforeach
              </ul>
              @endif
            </div>
          </div>
        </div>
      </div>
      @endsection
