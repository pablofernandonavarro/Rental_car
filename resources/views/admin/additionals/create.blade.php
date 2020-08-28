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
            <h1>Crear Adicionales</h1>
          </div>
          <ul class="breadcrumb">
            <li><a href="/index">Home</a></li>
            {{-- <li><a href="#">Pages</a></li> --}}
            <li class="active">Crear Adicionales</li>
          </ul>
        </div>
      </section>

      <!-- /BREADCRUMBS -->

      <div class="col-md-12">
        <div class="card ">
          <div class="card-body">
            <form method="POST" action="{{route('additional.store')}}" enctype="multipart/form-data">
              @method('post')
              @csrf

              <!-- ADDITIONAL IN SPANISH -->
              <div class="col-md-4">
                <div class="form-group">
                  <label for="">Ingrese el Adicional a Crear en Español</label>
                  <input type="text" class="form-control" name="additional_name_es" value="{{ old ('additional_name')}}">
                  <br>
                  {!!$errors->first('additional_name','<small class="alert alert-danger" role="alert">:message </small>')!!}
                </div>
                <div class="form-group">
                  <label for="">Descripcion del Adicional en Español </label>
                  <textarea class="form-control" name="additional_description_es" value="{{ old ('additional_description')}}"></textarea>
                  <br>
                  {!!$errors->first('additional_description','<small class="alert alert-danger" role="alert">:message </small>')!!}
                </div>
              </div>
              <!-- /ADDITIONAL IN SPANISH -->

              <!-- ADDITIONAL IN ENGLISH-->
              <div class="col-md-4">
                <div class="form-group">
                  <label for="">Ingrese el Adicional a Crear en Inglés</label>
                  <input type="text" class="form-control" name="additional_name_en" value="{{ old ('additional_name')}}">
                  <br>
                  {!!$errors->first('additional_name','<small class="alert alert-danger" role="alert">:message </small>')!!}
                </div>
                <div class="form-group">
                  <label for="">Descripcion del Adicional en Inglés </label>
                  <textarea class="form-control" name="additional_description_en" value="{{ old ('additional_description')}}"></textarea>
                  <br>
                  {!!$errors->first('additional_description','<small class="alert alert-danger" role="alert">:message </small>')!!}
                </div>
              </div>
              <!-- /ADDITIONAL IN ENGLISH-->

              <!-- ADDITIONAL IN PT-BR-->
              <div class="col-md-4">
                <div class="form-group">
                  <label for="">Ingrese el Adicional a Crear en Portugués</label>
                  <input type="text" class="form-control" name="additional_name_pt" value="{{ old ('additional_name')}}">
                  <br>
                  {!!$errors->first('additional_name','<small class="alert alert-danger" role="alert">:message </small>')!!}
                </div>
                <div class="form-group">
                  <label for="">Descripcion del Adicional en Portugués </label>
                  <textarea class="form-control" name="additional_description_pt" value="{{ old ('additional_description')}}"></textarea>
                  <br>
                  {!!$errors->first('additional_description','<small class="alert alert-danger" role="alert">:message </small>')!!}
                </div>
              </div>
              <!-- /ADDITIONAL IN PT-BR-->
              <div class="form-group">
                <br>
                <div class="form-group">
                  <label for="">Ingrese la imagen del adicional</label>
                  <input type="file" name="additional_image">
                </div>
              </div>
              <div class=" form-group">
                <div class="back-office-buttons col-md-6">
                  <button type="submit" class="btn btn-submit btn-theme btn-theme-dark btn-block">Crear</button>
                  <a href="{{app('request')->input('id')}}" class="btn btn-submit btn-theme btn-theme-dark btn-block ">Cancelar</a>
                </div>
                <div class=" form-group back-office-rigth-buttons col-md-6">
                  <a href="{{route('additional.index')}}" class="btn btn-submit btn-theme btn-theme-dark btn-block ">Volver al Listado</a>
                </div>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>

</div>

@endsection
