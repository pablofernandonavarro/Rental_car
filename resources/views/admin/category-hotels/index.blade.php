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
                    <h1>Listado de categoria</h1>
                </div>
                <ul class="breadcrumb">
                    <li><a href="/index">Home</a></li>
                    {{-- <li><a href="#">Pages</a></li> --}}
                    <li class="active">Listado de categorias de hoteles</li>
                </ul>
            </div>
        </section>
        <!-- /BREADCRUMBS -->
            <div class="card mb-3">
                <table class="table table-hover table-sprited back-office-listing">
                    <thead class="card-header">
                        <th class="back-office-listing-id">ID</th>
                        <th>Categoria</th>
                        <th></th>
                        <th> Accion</th>
                        <th><a href="{{route('category-hotels.create')}}" class="btn btn-submit btn-theme btn-theme-dark btn-block btn-create ">Crear</a></th>
                    </thead>
                    @foreach($categories as $category)
                    <tbody >
                        <td class="back-office-listing-id">{{$category->id}}</td>
                        <td>{{$category->category_hotel_name}}</td>
                         <td>
                            <a href="{{ route ('category-hotels.edit',$category['id']) }}" class="btn btn-submit btn-theme btn-theme-dark ">Editar</a>
                        </td>
                        <td>
                            <form action="/category-hotels/{{$category->id}}" method="post">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-submit btn-theme btn-theme-dark delete-element" type="submit" name="{{$category->category_hotel_name}}">Borrar</button>
                            </form>
                        </td>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {!! $categories->render() !!}
        </div>
    </div>
</div>
@endsection
