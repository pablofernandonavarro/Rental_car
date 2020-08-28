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
                        <h1>Editar transmision</h1>
                    </div>
                    <ul class="breadcrumb">
                        <li><a href="/index">Home</a></li>
                        {{-- <li><a href="#">Pages</a></li> --}}
                        <li class="active">Editar transmision</li>
                    </ul>
                </div>
            </section>
            <!-- /BREADCRUMBS -->
            <!-- FORM -->
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-body">
                        <form action="/transmission/{{$transmissions->id}}" enctype="multipart/form-data" method="post">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="">Transmisionn</label>
                                <input type="text" class="form-control" name="transmission_name" value='{{$transmissions->transmission_name}}'>
                            </div >
                            <!-- BUTTONS -->
                            <div class=" form-group ">
                            <div class="back-office-buttons col-md-6">
                                <button type="submit" class="btn btn-submit btn-theme btn-theme-dark btn-block">Guardar</button>
                                <a href="{{app('request')->input('id')}}" class="btn btn-submit btn-theme btn-theme-dark btn-block ">Cancelar</a>
                            </div>
                            <div class=" form-group back-office-rigth-buttons col-md-6">
                                <a href="{{ route('transmission.index')}}" class="btn btn-submit btn-theme btn-theme-dark btn-block ">Volver al Listado</a>
                                <a href="{{ route('transmission.create')}}" class="btn btn-submit btn-theme btn-theme-dark btn-block ">Crear</a>                                
                                <a href="{{ route ('transmission.destroy',$transmissions->id) }}"class="btn btn-submit btn-theme btn-theme-dark btn-block ">Borrar</a>
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
        @if (count($errors->all())>0)
        <ul class="fluid alert alert-danger" role="alert">
            @foreach ($errors->all() as $error)
            <li>{{$error}} </li>
            @endforeach
        </ul>
        @endif
@endsection
