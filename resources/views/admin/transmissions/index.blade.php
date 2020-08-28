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
                            <h1>Listado de Ttransmisiones</h1>
                        </div>
                        <ul class="breadcrumb">
                            <li><a href="/index">Home</a></li>
                            {{-- <li><a href="#">Pages</a></li> --}}
                            <li class="active">Listado de Transmisiones</li>
                        </ul>
                    </div>
                </section>
                <!-- /BREADCRUMBS -->
                <div class="card mb-3">
                    <table class="table table-hover table-sprited back-office-listing">
                        <thead class="card-header">
                            <th class="back-office-listing-id">ID</th>
                            <th>Transmisión </th>
                            <th></th>
                            <th></th>
                            {{-- <th><a href="{{route('transmission.create')}}" class="btn btn-submit btn-theme btn-theme-dark btn-block btn-create ">Crear</a></th> --}}
                        </thead>
                        @foreach($transmissions as $transmission)
                        <tbody >
                            <td class="back-office-listing-id">{{$transmission->id}}</td>
                            <td>{{$transmission->transmission_name}}</td>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {!! $transmissions->render() !!}
            </div>
        </div>
    </div>
</div>
@endsection

