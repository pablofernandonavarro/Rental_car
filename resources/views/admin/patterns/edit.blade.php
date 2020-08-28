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
            <h1>Editar Modelo</h1>
          </div>
          <ul class="breadcrumb">
            <li><a href="/index">Home</a></li>
            {{-- <li><a href="#">Pages</a></li> --}}
            <li class="active">Editar Modelo</li>
          </ul>
        </div>

        <div class="col-md-12">
          <div class="card ">
            <div class="card-body">
              <form action="/pattern/{{$patterns->id}}" enctype="multipart/form-data" method="post">
                @method('PUT')
                @csrf
                <div class="form-group">
                  <label for="">Modelo</label>
                  <input type="text" class="form-control" name="pattern_name"
                  value='{{$patterns->pattern_name}}'>
                  <br>
                  {!!$errors->first('pattern_name','<small class="alert alert-danger" role="alert">:message </small>')!!}
              </div>
                </div>
                <div class="form-group has-label">
                  <label for="brand" >Elija una Marca</label>
                  <select class="form-control">
                    @forelse($brands as $brand)
                    <option class="form-control" value={{$brand }}
                    @if($patterns->brand_id == old('brand_id', $brand->id))
                    selected
                    @endif>{{$brand->brand_name}}</option>
                    @empty
                    <option>No hay marcas registradas.</option>
                    @endforelse
                  </select>
                </div>
                <!-- BUTTONS -->
                <div class=" form-group ">

                  <div class="back-office-buttons col-md-6">
                    <button type="submit" class="btn btn-submit btn-theme btn-theme-dark btn-block">Guardar</button>
                    {{-- <a href="{{ route ('pattern.show',$patterns->id) }}" class="btn btn-submit btn-theme btn-theme-dark btn-block">Ver</a> --}}                                       <a href="{{app('request')->input('id')}}" class="btn btn-submit btn-theme btn-theme-dark btn-block ">Cancelar</a>
                  </div>

                  <div class=" form-group back-office-rigth-buttons col-md-6">
                    <a href="{{route('pattern.index')}}" class="btn btn-submit btn-theme btn-theme-dark btn-block ">Volver al Listado</a>
                    <a href="{{route('pattern.create')}}" class="btn btn-submit btn-theme btn-theme-dark btn-block ">Crear</a>
                    {{-- <form action="/patterns/{{$patterns->id}}" method="post" >
                      @method('DELETE')
                      @csrf
                      <button class="btn btn-submit btn-theme btn-theme-dark btn-block" type="submit" name="{{$patterns->pattern_name}}">Borrar</button>
                  </form> --}}
                  </div>
                </div>
                <!-- /BUTTONS -->

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  

  <!-- /CONTENT AREA -->
  @endsection
