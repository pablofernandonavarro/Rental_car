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
                        <h1>Ver Adicional</h1>
                    </div>
                    <ul class="breadcrumb">
                        <li><a href="/index">Home</a></li>
                        {{-- <li><a href="#">Pages</a></li> --}}
                        <li class="active">Ver Adicional</li>
                    </ul>
                </div>
            </section>
            <div class="card">
                <img src="{{asset('storage/images/'.$adds->additional_image)}}" alt="">
            </div>
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-body">

                        <div class="form-group">
                            <label for="">Adicional</label>
                            <input type="text" class="form-control" name="additional_name"
                            value='{{$adds->additional_name}}'>
                        </div>
                        <div class="form-group has-label">
                            <label for="input-message">Descripción</label>
                            <input type="text"
                            name="additional_name"  placeholder="Descripción" rows="4" cols="50"
                            data-toggle="tooltip" value='{{$adds->additional_description}}'
                            class="form-control">
                        </div>
                    </div >
                </div>
            </div>
            <!-- BUTTONS -->
            <div class=" form-group ">
                <div class="back-office-buttons col-md-6">
{{--                     <a href="{{ route ('additional.edit',$adds->id) }}" class="btn btn-submit btn-theme btn-theme-dark btn-block">Editar</a> --}}
                    <a href="{{app('request')->input('id')}}" class="btn btn-submit btn-theme btn-theme-dark btn-block ">Cancelar</a>
                </div>

                <div class=" form-group back-office-rigth-buttons col-md-6">
                    <a href="{{route('additional.index')}}" class="btn btn-submit btn-theme btn-theme-dark btn-block ">Volver al Listado</a>
                    <a href="{{route('additional.create')}}" class="btn btn-submit btn-theme btn-theme-dark btn-block ">Crear</a>
                    {{-- <a href="{{ route ('additional.destroy',$adds->id) }}"class="btn btn-submit btn-theme btn-theme-dark btn-block ">Borrar</a> --}}
                </div>
            </div>
            <!-- /BUTTONS -->
        </div>
    </div>
</div>
<!-- /CONTENT AREA -->
        @if (count($errors->all())>0)
        <ul class="fluid alert alert-danger" role="alert">
            @foreach ($errors->all() as $error)
            <li>{{$error}} </li>
            @endforeach
        </ul>
        @endif
@endsection

