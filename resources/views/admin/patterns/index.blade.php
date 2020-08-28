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
              <h1>Listado de Modelos</h1>
            </div>
            <ul class="breadcrumb">
              <li><a href="/index">Home</a></li>
              {{-- <li><a href="#">Pages</a></li> --}}
              <li class="active">Listado de Modelos</li>
            </ul>
          </div>
        </section>
        <!-- /BREADCRUMBS -->
        <table class="table table-hover table-sprited back-office-listing">
          <thead class="card-header">
            <th>ID</th>
            <th>Modelo de la Unidad</th>
            <th>Marca</th>
            <th> Accion</th>
            <th><a href="{{route('pattern.create')}}" class="btn btn-submit btn-theme btn-theme-dark btn-block btn-create ">Crear</a></th>
          </thead>
          @foreach($patterns as $pattern)
          <tbody>
            <td class="back-office-listing-id">{{$pattern->id}}</td>
            <td>{{$pattern->pattern_name}}</td>
            <td>{{$pattern->brand->brand_name}}</td>
            <td>
              <a href="{{ route ('pattern.edit',$pattern['id']) }}" class="btn btn-submit btn-theme btn-theme-dark ">Editar</a>
            </td>
            <td>
              <form action="/pattern/{{$pattern->id}}" method="post"onclick= "return ConfirmDelete()">
                  @method('DELETE')
                  @csrf
                  <button class="btn btn-submit btn-theme btn-theme-dark delete-element" type="submit" name="{{$pattern->pattern_name}}">Borrar</button>
              </form>
            </td>
            @endforeach
          </tbody>
        </table>
      </div>
      {!! $patterns->render() !!}
    </div>
  </div>
</div>
<br>
@if(session()->has('msj'))
<div class="alert alert-danger">
    {{session('msj')}}
</div>
@endif
<script src="{{url('js/confirmDelete.js')}}"></script>
@endsection
