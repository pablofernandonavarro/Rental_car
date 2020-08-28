@extends('layouts.admin-master')
@section('content')

<div class="container mt-2">
    <div class="row">
        
        
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
                        <form method="POST" action="{{route('additional.store')}}">
                            @method('post')
                            @csrf
                            <div class="form-group">
                                <label for="">Ingrese el Adicional a Crear</label>
                                <input type="text" class="form-control" name="additional_name"
                                value="{{ old ('additional_name')}}">
                                <label for="">Descripcion Adicional a Crear</label>
                                <input type="text" class="form-control" name="additional_description"
                                value="{{ old ('additional_description')}}">
                                <br>
                                {!!$errors->first('additional_name','<small class="alert alert-danger" role="alert">:message </small>')!!}
                            </div>
                            <div class="form-group has-label">
                                <label for="input-message">Descripción</label>
                                <textarea
                                name="additional_description" id="input-message" placeholder="Descripción" rows="4" cols="50"
                                data-toggle="tooltip"
                                class="form-control"></textarea>
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
<!-- /CONTENT AREA -->

@endsection
