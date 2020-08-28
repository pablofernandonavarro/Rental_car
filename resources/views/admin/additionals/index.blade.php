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
                    <h1>Listado de Adicionales</h1>
                </div>
                <ul class="breadcrumb">
                    <li><a href="/index">Home</a></li>
                    {{-- <li><a href="#">Pages</a></li> --}}
                    <li class="active">Listado de Adicionales</li>
                </ul>
            </div>
        </section>
        <!-- /BREADCRUMBS -->

            <div class="card mb-3">
                <table class="table table-hover table-sprited table-responsive back-office-listing">
                    <thead class="card-header">
                        <th class="back-office-listing-id">ID</th>
                        <th>Adicional</th>
                        <th>Descripción</th>
                        <th> Accion</th>
                        <th><a href="{{route('additional.create')}}" class="btn btn-submit btn-theme btn-theme-dark btn-block btn-create ">Crear</a></th>
                    </thead>
                    @foreach($adds as $add)
                    <tbody>
                        <td class="back-office-listing-id">{{$add->id}}</td>
                        <td>{{$add->additional_name}}</td>
                        <td>{{$add->additional_description}}</td>
                        <td>
                            <a href="{{ route ('additional.edit',$add->id) }}" class="btn btn-submit btn-theme btn-theme-dark ">Editar</a>
                        </td>
                        <td>
                            <form action="{{ route ('additional.destroy',$add->id) }}" method="POST" onclick= "return ConfirmDelete()" >
                                @method('DELETE')
                                @csrf
                              
                                <button class="btn btn-submit btn-theme btn-theme-dark" type="submit" >Borrar</button>
                            </form>
                        </td>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {!! $adds->render() !!}
        </div>
    </div>
</div>
</div>

<script src="{{url('js/confirmDelete.js')}}"></script>

@endsection
