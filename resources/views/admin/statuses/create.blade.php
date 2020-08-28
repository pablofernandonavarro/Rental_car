@extends('layouts.admin-master')
@section('content')

<div class="container mt-2">
    <div class="row">
        @if (count($errors->all())>0)
        <ul class="fluid alert alert-danger">
            @foreach ($errors->all() as $error)
            <li>{{$error}} </li>
            @endforeach
        </ul>
        @endif
        <!-- CONTENT AREA -->
        <div class="content-area">

            <!-- BREADCRUMBS -->
            <section class="page-section breadcrumbs text-center">
                <div class="container">
                    <div class="page-header">
                        <h1>Crear estado</h1>
                    </div>
                    <ul class="breadcrumb">
                        <li><a href="/index">Home</a></li>
                        {{-- <li><a href="#">Pages</a></li> --}}
                        <li class="active">Crear estado del auto</li>
                    </ul>
                </div>
            </section>
            <!-- /BREADCRUMBS -->

            <div class="col-md-12">
                <div class="card ">
                    <div class="card-body">
                        <form method="POST" action="{{route('status.store')}}">
                            @method('post')
                            @csrf
                            <div class="form-group">
                                <label for="">Ingrese el nombre del estado</label>
                                <input type="text" class="form-control" name="status_name" value="{{ old ('status_name') }}">
                            </div>
                            <div class=" form-group">
                            <div class="back-office-buttons col-md-6">
                                <button type="submit" class="btn btn-submit btn-theme btn-theme-dark btn-block">Crear</button>
                                <a href="{{app('request')->input('id')}}" class="btn btn-submit btn-theme btn-theme-dark btn-block ">Cancelar</a>
                            </div>
                            <div class=" form-group back-office-rigth-buttons col-md-6">
                                <a href="{{route('status.index')}}" class="btn btn-submit btn-theme btn-theme-dark btn-block ">Volver al Listado</a>
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
