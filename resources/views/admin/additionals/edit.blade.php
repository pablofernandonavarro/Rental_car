@extends('layouts.admin-master')
@section('content')
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
                            <form action="/additional/{{$adds->id}}" enctype="multipart/form-data" method="POST">
                                @method('PUT')
                                @csrf

                                <!-- ADDITIONAL IN SPANISH -->
                            <div class="col-md-12">
                                <div class="form-group ">
                                    <label class="label-control"for="input-add">Adicional</label>
                                    <textarea type="text" class="form-control" name="additional_name" id="input-message" placeholder="Nombre del adicional" >{{$adds->additional_name}}</textarea>
                                    <br>
                                    {!!$errors->first('additional_name','<small class="alert alert-danger" role="alert">:message </small>')!!}

                                </div>

                                <div class="form-group">
                                    <label for="input-description">Descripción</label>
                                    <textarea type="text" class="form-control" name="additional_description" id="input-message" placeholder="Descripción" >{{$adds->additional_description}}</textarea>
                                    <br>
                                    {!!$errors->first('additional_description','<small class="alert alert-danger" role="alert">:message </small>')!!}
                                </div>
                            </div>

                            <div class="form-group col-md-3 has-label">
                                <label for="" >Lenguaje</label>
                                <select class="form-control" name="lang_id">
                                    @forelse($langs as $lang)
                                        @if($adds->lang_id == $lang->id)
                                            <option value="{{ $lang->id }}" selected='selected'>{{ $lang->lang_name }}</option>
                                        @else
                                            <option value="{{ $lang->id }}">{{ $lang->lang_name }}</option>
                                        @endif    
                                    @empty
                                        <option>No hay transmisiones.</option>
                                    @endforelse
                                </select>
                            </div>
                                <!-- /ADDITIONAL IN SPANISH -->

                                <div class="form-group">
                                    <label for="input-image-additional">Ingrese la imagen del adicional</label>
                                    <input  class="form-control" type="file" name="additional_image">
                                    <br>
                                    {!!$errors->first('additional_image','<small class="alert alert-danger" role="alert">:message </small>')!!}
                                </div>
                                <!-- BUTTONS -->
                                <div class="form-group ">
                                    <div class="back-office-buttons col-md-6">
                                        <button type="submit" class="btn btn-submit btn-theme btn-theme-dark btn-block">Guardar</button>
                                        <a href="{{ route ('additional.show',$adds->id) }}" class="btn btn-submit btn-theme btn-theme-dark btn-block">Ver</a>
                                        <a href="{{app('request')->input('id')}}" class="btn btn-submit btn-theme btn-theme-dark btn-block ">Cancelar</a>
                                    </div>

                                </div>
                                <!-- /BUTTONS -->
                                
                            </form>
                        </div>
                        <div class="form-group back-office-rigth-buttons col-md-6 ">
                            <a href="{{route('additional.index')}}" class="btn btn-submit btn-theme btn-theme-dark btn-block ">Volver al Listado</a>
                            <a href="{{route('additional.create')}}" class="btn btn-submit btn-theme btn-theme-dark btn-block ">Crear</a>
                            <form action="/additional.destroy/{{$adds->id}}" method="post" class="form-group2" style="margin-top: 1%;">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-submit btn-theme btn-theme-dark btn-block" type="submit" name="{{$adds->additional_name}}">Borrar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<script src="{{url('js/confirmDelete.js')}}"></script>
    @endsection
