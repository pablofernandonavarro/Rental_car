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
                        <h1>Editar Marca</h1>
                    </div>
                    <ul class="breadcrumb">
                        <li><a href="/index">Home</a></li>
                        {{-- <li><a href="#">Pages</a></li> --}}
                        <li class="active">Editar Marca</li>
                    </ul>
                </div>
            </section>
            <!-- /BREADCRUMBS -->
            <!-- FORM -->
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-body">
                        <form action="/brand/{{$brands->id}}" enctype="multipart/form-data" method="post">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="">Marca</label>
                                <input type="text" class="form-control" name="brand_name" value='{{$brands->brand_name}}'>
                                <br>
                                    {!!$errors->first('brand_name','<small class="alert alert-danger" role="alert">:message </small>')!!}
                                </div>
                            </div >
                <!-- BUTTONS -->
                            <div class=" form-group ">
                            <div class="back-office-buttons col-md-6">
                                <button type="submit" class="btn btn-submit btn-theme btn-theme-dark btn-block">Guardar</button>
                                <a href="{{app('request')->input('id')}}" class="btn btn-submit btn-theme btn-theme-dark btn-block ">Cancelar</a>
                            </div>
                            <div class=" form-group back-office-rigth-buttons col-md-6">
                                <a href="{{ route('brand.index')}}" class="btn btn-submit btn-theme btn-theme-dark btn-block ">Volver al Listado</a>
                                <a href="{{ route('brand.create')}}" class="btn btn-submit btn-theme btn-theme-dark btn-block ">Crear</a> 
                                                        
                                {{-- <form action="/brand/{{$brands->id}}" method="post" class="delete-element">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-submit btn-theme btn-theme-dark" type="submit" name="{{$brands->brand_name}}">Borrar</button>
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

<script src="{{url('js/confirmDelete.js')}}"></script>       

@endsection

