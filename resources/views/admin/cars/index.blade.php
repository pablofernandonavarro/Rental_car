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
              <h1>Listado de Autos</h1>
            </div>
            <ul class="breadcrumb">
              <li><a href="/index">Home</a></li>
              {{-- <li><a href="#">Pages</a></li> --}}
              <li class="active">Listado de Autos</li>
            </ul>
          </div>
        </section>
        <!-- /BREADCRUMBS -->
        <table class="table table-hover table-sprited back-office-listing">
          <thead class="card-header">
            <th>ID</th>
            <th>Categoría</th>
            <th>Modelo</th>
            <th>Marca</th>
            {{-- <th>Tipo</th> --}}
            <th class="back-office-listing-id"><i class="fas fa-user-friends"></i></th>
            <th class="back-office-listing-id"><i class="fa fa-suitcase-rolling &f5c1 fa-lg"></i></th>
            <th class="back-office-listing-id"><i class="fa fa-suitcase-rolling &f5c1 fa-sm"></i></th>
            <th class="back-office-listing-id"><i class="fa fa-road"></i>/<i class="fas fa-gas-pump"></i></th>
            <th class="tdgearbox" style="padding-top: 12%;border-bottom: none;"><img class="gearbox"src="assets\img\gearbox4.png" alt="" ></th>
            <th> Accion</th>
            <th><a href="{{route('car.create')}}" class="btn btn-submit btn-theme btn-theme-dark btn-block btn-create ">Crear</a></th>
          </thead>
          @foreach($cars as $car)
          <tbody>
            <td class="back-office-listing-id">{{$car->id}}</td>
            <td>{{$car->category->category_car_name}}</td>
            <td>{{$car->pattern->pattern_name}}</td>
            <td>{{$car->brand->brand_name}}</td>
            {{-- <td>{{$car->type->type_name}}</td> --}}
            <td class="back-office-listing-id">{{$car->passengerQuantity}}</td>
            <td class="back-office-listing-id">{{$car->luggageBigQuantity}}</td>
            <td class="back-office-listing-id">{{$car->luggageSmallQuantity}}</td>
            <td class="back-office-listing-id">{{$car->km_x_lts}}</td>
            <td>{{$car->transmission->transmission_name}}</td>
            <td>
              <a href="{{ route ('car.edit',$car['id']) }}" class="btn btn-submit btn-theme btn-theme-dark ">Editar</a>
            </td>
            <td>
              <form action="/car/{{$car->id}}" method="post">
                @method('DELETE')
                @csrf
                <button class="btn btn-submit btn-theme btn-theme-dark " type="submit" name="{{$car->id}}">Borrar</button>
            </form>
            </td>
            @endforeach
          </tbody>
        </table>
      </div>
      {!! $cars->render() !!}
    </div>
  </div>
</div>
@endsection
