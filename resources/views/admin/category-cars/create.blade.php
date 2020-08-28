@extends('layouts.admin-master')
@section('content')

<div class="container mt-2">
    <div class="row">
       
        <div class="content-area">

            <!-- BREADCRUMBS -->
            <section class="page-section breadcrumbs text-center">
                <div class="container">
                    <div class="page-header">
                        <h1>Crear Categoria</h1>
                    </div>
                    <ul class="breadcrumb">
                        <li><a href="/index">Home</a></li>
                        {{-- <li><a href="#">Pages</a></li> --}}
                        <li class="active">Crear categoria</li>
                    </ul>
                </div>
            </section>
            <!-- /BREADCRUMBS -->

            <div class="col-md-12">
                <div class="card ">
                    <div class="card-body">
                        <form method="POST" action="{{route('category-cars.store')}}">
                            @method('post')
                            @csrf
                            <div class="form-group">
                                <label for="">Ingrese el nombre de la categoria</label>
                                <input type="text" class="form-control" name="category_car_name" value="{{ old ('category_car_name') }}">
                                <br>
                                    {!!$errors->first('category_car_name','<small class="alert alert-danger" role="alert">:message </small>')!!}
                            </div>
                            <div class=" form-group">
                            <div class="back-office-buttons col-md-6">
                                <button type="submit" class="btn btn-submit btn-theme btn-theme-dark btn-block">Crear</button>
                                <a href="{{app('request')->input('id')}}" class="btn btn-submit btn-theme btn-theme-dark btn-block ">Cancelar</a>
                            </div>
                            <div class=" form-group back-office-rigth-buttons col-md-6">
                                <a href="{{route('category-cars.index')}}" class="btn btn-submit btn-theme btn-theme-dark btn-block ">Volver al Listado</a>
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
