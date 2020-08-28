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
                        <h1>Editar Adicional</h1>
                    </div>
                    <ul class="breadcrumb">
                        <li><a href="/index">Home</a></li>
                        {{-- <li><a href="#">Pages</a></li> --}}
                        <li class="active">Editar Adicional</li>
                    </ul>
                </div>

                <div class="col-md-12">
                    <div class="card ">
                        <div class="card-body">
                            <form action="/admin/additional/{{$adds->id}}" enctype="multipart/form-data" method="post">
                                @method('PUT')
                                @csrf
                                <div class="form-group">
                                    <label for="">Adicional</label>
                                    <input type="text" class="form-control" name="additional_name"
                                    value='{{$adds->additional_name}}'>
                                </div>
                                <div class="form-group has-label">
                                    <label for="input-message">Descripción</label>
                                    <input
                                    name="additional_description" id="input-message" placeholder="Descripción" rows="4" cols="50" value='{{$adds->additional_description}}' data-toggle="tooltip" class="form-control">
                                    <br>
                                    {!!$errors->first('brand_name','<small class="alert alert-danger" role="alert">:message </small>')!!}
                                </div>
                            </form>
                        </div>
                               
                                <!-- BUTTONS -->
                        <div class=" form-group ">
                            <div class="back-office-buttons col-md-6">
                                <button type="submit" class="btn btn-submit btn-theme btn-theme-dark btn-block">Guardar</button>
                                <a href="{{ route ('additional.show',$adds->id) }}" class="btn btn-submit btn-theme btn-theme-dark btn-block">Ver</a>
                                <a href="{{app('request')->input('id')}}" class="btn btn-submit btn-theme btn-theme-dark btn-block ">Cancelar</a>
                            </div>
                        <div class=" form-group back-office-rigth-buttons col-md-6">
                            <a href="{{route('additional.index')}}" class="btn btn-submit btn-theme btn-theme-dark btn-block ">Volver al Listado</a>
                            <a href="{{route('additional.create')}}" class="btn btn-submit btn-theme btn-theme-dark btn-block ">Crear</a>
                                            {{-- <form action="/categories/{{$categories->id}}" method="post" class="delete-element" >
                                                @method('DELETE')
                                                @csrf
                                                <button class="btn btn-submit btn-theme btn-theme-dark btn-block" type="submit" name="{{$categories->category_name}}">Borrar</button>
                                            </form> --}}
                        </div>
                                    {{-- </div> --}}
                                    <!-- /BUTTONS -->

                                </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
        {{-- </div> --}}
        <!-- /CONTENT AREA -->
@endsection
