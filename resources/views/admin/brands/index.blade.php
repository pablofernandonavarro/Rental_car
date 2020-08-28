@extends('layouts.admin-master')
@section('content')


<div class="container mt-2 mb-2 ">

    <div class="row">
        <div class="col-md-12">
            <!-- CONTENT AREA -->
    <div class="content-area">

        <!-- BREADCRUMBS -->
        <section class="page-section breadcrumbs text-center">
            <div class="container">
                <div class="page-header">
                    <h1>Listado de Marcas</h1>
                </div>
                <ul class="breadcrumb">
                    <li><a href="/index">Home</a></li>
                    {{-- <li><a href="#">Pages</a></li> --}}
                    <li class="active">Listado de Marcas</li>
                </ul>
            </div>
        </section>
        <!-- /BREADCRUMBS -->
            <div class="card mb-3">
                <table class="table table-hover table-sprited back-office-listing">
                    <thead class="card-header">
                        <th class="back-office-listing-id">ID</th>
                        <th>Marca de la Unidad</th>
                        <th></th>
                        <th> Accion</th>
                        <th><a href="{{route('brand.create')}}" class="btn btn-submit btn-theme btn-theme-dark btn-block btn-create ">Crear</a></th>
                    </thead>
                    @foreach($brands as $brand)
                    <tbody >
                        <td class="back-office-listing-id">{{$brand->id}}</td>
                        <td>{{$brand->brand_name}}</td>
                         <td>
                            <a href="{{ route ('brand.edit',$brand['id']) }}" class="btn btn-submit btn-theme btn-theme-dark ">Editar</a>
                        </td>
                        <td>
                            <form action="{{ route ('brand.destroy',$brand->id) }}" method="post" onclick= "return ConfirmDelete()">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-submit btn-theme btn-theme-dark" type="submit" >Borrar</button>
                            </form>
                        </td>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {!! $brands->render() !!}
        </div>
    </div>
</div>
@if(session()->has('msj'))
<div class="alert alert-danger">
    {{session('msj')}}
</div>
@endif
<script src="{{url('js/confirmDelete.js')}}"></script>
@endsection
