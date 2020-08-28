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
                        <h1>Editar Faq</h1>
                    </div>
                    <ul class="breadcrumb">
                        <li><a href="/index">Home</a></li>
                        {{-- <li><a href="#">Pages</a></li> --}}
                        <li class="active">Editar Faq</li>
                    </ul>
                </div>
            </section>
            <!-- /BREADCRUMBS -->
            <!-- FORM -->
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-body">
                        <form action="/faq/{{$faqs->id}}" enctype="multipart/form-data" method="post">
                            @method('PUT')
                            @csrf

                            <!-- FAQ_ES-->
                            <div class="col-md-4">
                            <div class="form-group ">
                                <label for="">Pregunta frecuente en Español</label>
                                <textarea type="text" class="form-control" name="question" >{{$faqs->question}}</textarea>
                                <br>
                                {!!$errors->first('question','<small class="alert alert-danger" role="alert">:message </small>')!!}
                            </div >
                            <div class="form-group">
                                <label for="">Respuesta a la pregunta en Español</label>
                                <textarea type="text" class="form-control" name="answer" >{{$faqs->answer}}</textarea>
                                <br>
                                {!!$errors->first('answer','<small class="alert alert-danger" role="alert">:message </small>')!!}
                            </div >
                        </div>
                            <!-- /FAQ_ES-->

                            <!-- FAQ_EN-->
                            <div class="col-md-4">
                            <div class="form-group ">
                                <label for="">Pregunta frecuente en Inglés</label>
                                <textarea type="text" class="form-control" name="question" >{{$faqs->question}}</textarea>
                                <br>
                                {!!$errors->first('question','<small class="alert alert-danger" role="alert">:message </small>')!!}
                            </div >
                            <div class="form-group ">
                                <label for="">Respuesta a la pregunta en Inglés</label>
                                <textarea type="text" class="form-control" name="answer" >{{$faqs->answer}}</textarea>
                                <br>
                                {!!$errors->first('answer','<small class="alert alert-danger" role="alert">:message </small>')!!}
                            </div >
                        </div>
                            <!-- /FAQ_EN-->

                            <!-- FAQ_PT-->
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Pregunta frecuente en Portugués</label>
                                <textarea type="text" class="form-control" name="question" >{{$faqs->question}}</textarea>
                                <br>
                                {!!$errors->first('question','<small class="alert alert-danger" role="alert">:message </small>')!!}
                            </div >
                            <div class="form-group">
                                <label for="">Respuesta a la pregunta en Portugués</label>
                                <textarea type="text" class="form-control" name="answer" >{{$faqs->answer}}</textarea>
                                <br>
                                {!!$errors->first('answer','<small class="alert alert-danger" role="alert">:message </small>')!!}
                            </div >
                        </div>
                            <!-- /FAQ_PT-->

                            <div class="form-group has-label">
                                <label for="category_id" >Elija una Categoría</label>
                                <select class="form-control">
                                    @forelse($category_faqs as $category)
                                    <option class="form-control" value="{{$faqs->category->category_name}}"
                                    @if($faqs->category_id === $category->id))
                                    selected='selected'
                                    @endif>{{$category->category_faq_name}}</option>
                                    @empty
                                    <option>No hay marcas registradas.</option>
                                    @endforelse
                                </select>
                            </div>
                            <!-- BUTTONS -->
                            <div class=" form-group ">
                                <div class="back-office-buttons col-md-6">
                                    <button type="submit" class="btn btn-submit btn-theme btn-theme-dark btn-block">Guardar</button>
                                    <a href="{{app('request')->input('id')}}" class="btn btn-submit btn-theme btn-theme-dark btn-block ">Cancelar</a>
                                </div>
                                <div class=" form-group back-office-rigth-buttons col-md-6">
                                    <a href="{{ route('faq.index')}}" class="btn btn-submit btn-theme btn-theme-dark btn-block ">Volver al Listado</a>
                                    <a href="{{ route('faq.create')}}" class="btn btn-submit btn-theme btn-theme-dark btn-block ">Crear</a>
                                    {{-- <form action="/faqs/{{$faqs->id}}" method="post" class="delete-element" >
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-submit btn-theme btn-theme-dark btn-block" type="submit" name="{{$faqs->faq_name}}">Borrar</button>
                                    </form> --}}

                                </div>
                            </div>
                            <!-- /BUTTONS -->
                        </form>
                        <!-- /FORM -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
