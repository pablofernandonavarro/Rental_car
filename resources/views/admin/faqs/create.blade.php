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
            <h1>Crear Faq</h1>
          </div>
          <ul class="breadcrumb">
            <li><a href="/index">Home</a></li>
            {{-- <li><a href="#">Pages</a></li> --}}
            <li class="active">Crear Faq</li>
          </ul>
        </div>
      </section>
      <!-- /BREADCRUMBS -->
      <div class="col-md-12">
        <div class="card ">
          <div class="card-body">
            <form method="POST" action="{{route('faq.store')}}" enctype="multipart/form-data">
              @method('post')
              @csrf

              <!-- FAQS IN SPANISH -->
              <div class="col-md-4">
              <div class="form-group">
                <label for="">Ingrese la Pregunta en Español</label>
                <textarea type="text" class="form-control" name="question_es" value="{{ old ('question') }}"></textarea>
                <br>
                {!!$errors->first('question','<small class="alert alert-danger" role="alert">:message </small>')!!}
              </div>
              <div class="form-group">
                <label for="">Ingrese la Respuesta en Español</label>
                <textarea type="text" class="form-control" name="answer_es" value="{{ old ('answer') }}"></textarea>
                <br>
                {!!$errors->first('answer','<small class="alert alert-danger" role="alert">:message </small>')!!}
              </div>
              </div>
              <!-- /FAQS IN SPANISH -->

              <!-- FAQS IN ENGLISH -->
              <div class="col-md-4">
              <div class="form-group">
                <label for="">Ingrese la Pregunta en Inglés</label>
                <textarea type="text" class="form-control" name="question_en" value="{{ old ('question') }}"></textarea>
                <br>
                {!!$errors->first('question','<small class="alert alert-danger" role="alert">:message </small>')!!}
              </div>
              <div class="form-group">
                <label for="">Ingrese la Respuesta en Inglés</label>
                <textarea type="text" class="form-control" name="answer_en" value="{{ old ('answer') }}"></textarea>
                <br>
                {!!$errors->first('answer','<small class="alert alert-danger" role="alert">:message </small>')!!}
              </div>
            </div>
              <!-- /FAQS IN ENGLISH -->

              <!-- FAQS IN PT-BR -->
              <div class="col-md-4">
              <div class="form-group">
                <label for="">Ingrese la Pregunta en Portugués</label>
                <textarea type="text" class="form-control" name="question" value="{{ old ('question') }}"></textarea>
                <br>
                {!!$errors->first('question_pt-BR','<small class="alert alert-danger" role="alert">:message </small>')!!}
              </div>
              <div class="form-group">
                <label for="">Ingrese la Respuesta en Portugués</label>
                <textarea type="text" class="form-control" name="answer_pt-BR" value="{{ old ('answer') }}"></textarea>
                <br>
                {!!$errors->first('answer','<small class="alert alert-danger" role="alert">:message </small>')!!}
              </div>
             </div>
              <!-- /FAQS IN PT-BR -->

              <div class="form-group has-label">
                <label for="category_id" >Elija una Categoría</label>
                <select class="form-control" name="category_id">
                  @forelse($category_faqs as $category)
                  <option class="form-control" value="{{$category->id}}"
                    @if(old('category_id', $category->id))
                    selected
                    @endif>{{$category->category_faq_name}}
                  </option>
                    @empty
                    <option>No hay marcas registradas.</option>
                    @endforelse
                  </select>
                </div>

                <div class=" form-group">
                  <div class="back-office-buttons col-md-6">
                    <button type="submit" class="btn btn-submit btn-theme btn-theme-dark btn-block">Crear</button>
                    <a href="{{app('request')->input('id')}}" class="btn btn-submit btn-theme btn-theme-dark btn-block ">Cancelar</a>
                  </div>
                  <div class=" form-group back-office-rigth-buttons col-md-6">
                    <a href="{{route('faq.index')}}" class="btn btn-submit btn-theme btn-theme-dark btn-block ">Volver al Listado</a>
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
