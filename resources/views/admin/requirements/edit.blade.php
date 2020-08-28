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
                            <h1>Editar requisito</h1>
                        </div>
                        <ul class="breadcrumb">
                            <li><a href="/index">Home</a></li>
                            <li class="active">Editar el requisito</li>
                        </ul>
                    </div>
                </section>
                <!-- /BREADCRUMBS -->
                <!-- FORM -->
                <div class="col-md-12">
                    <div class="card ">
                        <div class="card-body">
                            <form action="/requirement/{{$requirements->id}}" enctype="multipart/form-data" method="post">
                                @method('PUT')
                                @csrf
                                <!-- REQUIREMENT -->
                                <div class="form-group col-md-12">
                                    <label for="">Requisito</label>
                                    <textarea type="text" class="form-control" name="requirement_name"  rows="6">{{$requirements->requirement_name}}</textarea>
                                   <br>
                                    {!!$errors->first('requirement_name','<small class="alert alert-danger" role="alert">:message </small>')!!}
                                </div >
                                <div class="form-group col-md-12">
                                    <div class="form-group col-md-4">
                                        <label for="">Lenguaje</label>
                                        <select name="lang_id" class="form-control">
                                            @foreach ($langs as $lang)
                                                <option value="{{$lang->id}}">{{$lang->lang_name}}</option>
                                            @endforeach
                                        </select>
                                    </div >
                                </div >
                                <!-- /REQUIREMENT -->
                                <!-- BUTTONS -->
                                <div class=" form-group ">
                                    <div class="back-office-buttons col-md-6">
                                        <button type="submit" class="btn btn-submit btn-theme btn-theme-dark btn-block">Guardar</button>
                                        <a href="{{app('request')->input('id')}}" class="btn btn-submit btn-theme btn-theme-dark btn-block ">Cancelar</a>
                                    </div>
                                    <div class=" form-group back-office-rigth-buttons col-md-6">
                                        <a href="{{ route('requirement.index')}}" class="btn btn-submit btn-theme btn-theme-dark btn-block ">Volver al Listado</a>
                                        <a href="{{ route('requirement.create')}}" class="btn btn-submit btn-theme btn-theme-dark btn-block ">Crear</a>
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
    <!-- /CONTENT AREA -->
@endsection
