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
                    <h1>Listado de Faqs</h1>
                </div>
                <ul class="breadcrumb">
                    <li><a href="/index">Home</a></li>
                    {{-- <li><a href="#">Pages</a></li> --}}
                    <li class="active">Listado de Faqs</li>
                </ul>
            </div>
        </section>
        <!-- /BREADCRUMBS -->
            <div class="card mb-3 faq_index">
                <table class="table table-hover table-sprited back-office-listing">
                    <thead class="card-header">
                        <th class="back-office-listing-id">ID</th>
                        <th>Pregunta</th>
                        <th>Respuesta</th>
                        <th>Categoría</th>
                        <th> Accion</th>
                        <th><a href="{{route('faq.create')}}" class="btn btn-submit btn-theme btn-theme-dark btn-block btn-create faq_index_btn">Crear</a></th>
                    </thead>
                    @foreach($faqs as $faq)
                    <tbody >
                        <td class="back-office-listing-id">{{$faq->id}}</td>
                        <td class="faq-item">{{$faq->question}}</td>
                        <td class="faq-item">{{$faq->answer}}</td>
                        <td class="faq-item">{{$faq->category->category_faq_name}}</td>
                         <td>
                            <a href="{{ route ('faq.edit',$faq['id']) }}" class="btn btn-submit btn-theme btn-theme-dark faq_index_btn ">Editar</a>
                        </td>
                        <td>
                            <form action="/faq/{{$faq->id}}" method="post">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-submit btn-theme btn-theme-dark delete-element faq_index_btn" type="submit" name="{{$faq->id}}">Borrar</button>
                            </form>
                        </td>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {!! $faqs->render() !!}
        </div>
    </div>
</div>
@endsection
