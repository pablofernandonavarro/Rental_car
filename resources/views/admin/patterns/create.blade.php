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
            <h1>Crear Modelo</h1>
          </div>
          <ul class="breadcrumb">
            <li><a href="/index">Home</a></li>
            {{-- <li><a href="#">Pages</a></li> --}}
            <li class="active">Crear Modelo</li>
          </ul>
        </div>
        <div class="col-md-12">
          <div class="card ">
            <div class="card-body">
              <form action="{{route('pattern.store')}}"  enctype="multipart/form-data" method="post">
                @csrf
                <div class="form-group">
                  <label for="">Modelo</label>
                  <input type="text" class="form-control" name="pattern_name"
                  value='{{ old ('pattern_name')}}'>
                  <br>
                  {!!$errors->first('pattern_name','<small class="alert alert-danger" role="alert">:message </small>')!!}
                </div>
                
                <div class="form-group has-label">
                  <label for="brand_id" >Elija una Marca</label>
                  <select class="form-control" name="brand_id">
                    @forelse($brands as $brand)
                    <option class="form-control" value={{$brand->id }}
                      @if( old('brand_id', $brand->id))
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
                      <button type="submit" class="btn btn-submit btn-theme btn-theme-dark btn-block">Crear</button>

                      <a href="{{app('request')->input('id')}}" class="btn btn-submit btn-theme btn-theme-dark btn-block ">Cancelar</a>
                    </div>
                    <div class=" form-group back-office-rigth-buttons col-md-6">
                      <a href="{{route('pattern.index')}}" class="btn btn-submit btn-theme btn-theme-dark btn-block ">Volver al Listado</a>
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
   
    @endsection
