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
                        <h1>Crear Marcas</h1>
                    </div>
                    <ul class="breadcrumb">
                        <li><a href="/index">Home</a></li>
                        {{-- <li><a href="#">Pages</a></li> --}}
                        <li class="active">Crear Marcas</li>
                    </ul>
                </div>
            </section>
            <!-- /BREADCRUMBS -->

            <div class="col-md-12">
                <div class="card ">
                    <div class="card-body">
                        <form method="POST" action="{{route('brand.store')}}">
                            @method('post')
                            @csrf
                            <div class="form-group">
                                <label for="">Ingrese la Marca a Crear</label>
                                <input type="text" class="form-control" name="brand_name" value="{{ old ('brand_name') }}">
                            </div>
                            <br>
                                    {!!$errors->first('brand_name','<small class="alert alert-danger" role="alert">:message </small>')!!}
                                </div>
                            <div class=" form-group">
                            <div class="back-office-buttons col-md-6">
                                <button type="submit" class="btn btn-submit btn-theme btn-theme-dark btn-block">Crear</button>
                                <a href="{{app('request')->input('id')}}" class="btn btn-submit btn-theme btn-theme-dark btn-block ">Cancelar</a>
                            </div>
                            <div class=" form-group back-office-rigth-buttons col-md-6">
                                <a href="{{route('brand.index')}}" class="btn btn-submit btn-theme btn-theme-dark btn-block ">Volver al Listado</a>
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
