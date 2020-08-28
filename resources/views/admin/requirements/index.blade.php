@extends('layouts.admin-master')
@section('content')

<div class="container mt-2 mb-2 ">
    <div class="row">
        <div class="col-md-12">
            <!-- CONTENT AREA -->
            <div class="content-area">
                <!-- BREADCRUMBS -->
                <section class="page-section breadcrumbs text-center">
                    <div cla    ss="container">
                        <div class="page-header">
                            <h1>Listado de requisitos</h1>
                        </div>
                        <ul class="breadcrumb">
                            <li><a href="/index">Home</a></li>
                            <li class="active">Listado de requisitos</li>
                        </ul>
                    </div>
                </section>
                <!-- /BREADCRUMBS -->
                <div class="card mb-3">
                    <table class="table table-hover table-sprited back-office-listing">
                        <thead class="card-header">
                            <th class="back-office-listing-id">ID</th>
                            <th>Requisito</th>
                            <th>Lenguaje</th>
                            <th> Accion</th>
                            <th><a href="{{route('requirement.create')}}" class="btn btn-submit btn-theme btn-theme-dark btn-block btn-create ">Crear</a></th>
                        </thead>
                        @foreach($requirements as $requirement)
                            <tbody>
                                <td class="back-office-listing-id">{{$requirement->id}}</td>
                                <td>{{$requirement->requirement_name}}</td>
                                <td>{{$requirement->lang->lang_name}}</td>
                                <td>
                                    <a href="{{ route ('requirement.edit',$requirement['id']) }}" class="btn btn-submit btn-theme btn-theme-dark ">Editar</a>
                                </td>
                                <td>
                                    <form action="/requirement/{{$requirement->id}}" method="post" style="margin-left:20%;">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-submit btn-theme btn-theme-dark delete-element" type="submit" name="{{$requirement->requirement_name}}">Borrar</button>
                                    </form>
                                </td>
                            </tbody>
                        @endforeach
                    </table>
                    {!! $requirements->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
