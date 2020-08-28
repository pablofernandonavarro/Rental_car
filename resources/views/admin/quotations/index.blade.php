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
              <h1>Listado de Presupuestos</h1>
            </div>
            <ul class="breadcrumb">
              <li><a href="/index">Home</a></li>
              {{-- <li><a href="#">Pages</a></li> --}}
              <li class="active">Listado de Presupuestos</li>
            </ul>
          </div>
        </section>
        <!-- /BREADCRUMBS -->
        <table class="table table-hover table-sprited back-office-listing quotation-listing">
          <thead class="card-header">
            <th>ID</th>
            <th>IdCli</th>
            <th>Nombre</th>

            <th>Email</th>
            <th>Teléfono</th>
            <th>Edad</th>
            <th>F_H_Ent</th>
            <th>F_H_Dev</th>
            <th>L_Ent</th>
            <th>L_Dev</th>
            {{-- <th>Categoria Auto</th> --}}
            <th>Comment</th>
            <th> Accion</th>
            <th><a href="{{route('quotation.create')}}" class="btn btn-submit btn-theme btn-theme-dark btn-block btn-create ">Crear</a></th>
          </thead>
          @foreach($quotations as $quotation)
          <tbody >
            <td class="back-office-listing-id">{{$quotation->id}}</td>
            <td class="back-office-listing-id">{{$quotation->client->id}}</td>
            <td>{{$quotation->client["first_name"]}}
                {{$quotation->client["last_name"]}}</td>
            <td>{{$quotation->client["email"]}}</td>
            <td>{{$quotation->client["phone"]}}</td>
            <td class="back-office-listing-id">{{$quotation->client["age"]}}</td>
            <td>{{$quotation->first_date}}</td>
            <td>{{$quotation->last_date}}</td>
            <td>{{$quotation->retreat_place}}</td>
            <td>{{$quotation->return_place}}</td>
            {{-- <td>{{$quotation->category_car["category_car_name"]}}</td> --}}
            <td>{{$quotation->comments}}</td>
            {{-- <td class="back-office-listing-id">{{$car->passengerCuantity}}</td> --}}
            <td>
              <a href="{{ route ('quotation.edit',$quotation['id']) }}" class="btn btn-submit btn-theme btn-theme-dark ">Editar</a>
            </td>
            <td>
              <a href="{{ route ('quotation.destroy',$quotation['id']) }}"class="btn btn-submit btn-theme btn-theme-dark ">Borrar</a>
            </td>
            @endforeach
          </tbody>
        </table>
      </div>
      {!! $quotations->render() !!}
    </div>
  </div>
</div>
@endsection
