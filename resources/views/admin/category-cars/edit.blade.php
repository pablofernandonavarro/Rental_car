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
                        <h1>Editar Categoria</h1>
                    </div>
                    <ul class="breadcrumb">
                        <li><a href="/index">Home</a></li>
                        {{-- <li><a href="#">Pages</a></li> --}}
                        <li class="active">Editar categoria de autos</li>
                    </ul>
                </div>
            </section>
            <!-- /BREADCRUMBS -->
            <!-- FORM -->
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-body">
                        <form action="/category-cars/{{$categories->id}}" enctype="multipart/form-data" method="post">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="">Categoria</label>
                                <input type="text" class="form-control" name="category_car_name" value='{{$categories->category_car_name}}'>
                                <br>
                                {!!$errors->first('category_car_name','<small class="alert alert-danger" role="alert">:message </small>')!!}
                            </div >
                <!-- BUTTONS -->
                            <div class=" form-group ">
                            <div class="back-office-buttons col-md-6">
                                <button type="submit" class="btn btn-submit btn-theme btn-theme-dark btn-block">Guardar</button>
                                <a href="{{app('request')->input('id')}}" class="btn btn-submit btn-theme btn-theme-dark btn-block ">Cancelar</a>
                            </div>
                            <div class=" form-group back-office-rigth-buttons col-md-6">
                                <a href="{{ route('category-cars.index')}}" class="btn btn-submit btn-theme btn-theme-dark btn-block ">Volver al Listado</a>
                                <a href="{{ route('category-cars.create')}}" class="btn btn-submit btn-theme btn-theme-dark btn-block ">Crear</a>  
                           {{-- <form action="/category-cars/{{$categories->id}}" method="post" class="delete-element" id="delete-element">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-submit btn-theme btn-theme-dark btn-block" type="submit" name="{{$categories->category_car_name}}">Borrar</button>
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
           
<script src="{{url('js/delete-element.js')}}"></script>
@endsection