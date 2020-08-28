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
            <h1>Editar Auto</h1>
          </div>
          <ul class="breadcrumb">
            <li><a href="/index">Home</a></li>
            {{-- <li><a href="#">Pages</a></li> --}}
            <li class="active">Editar auto</li>
          </ul>
        </div>
      </section>
      <!-- BREADCRUMBS -->
      <div class="col-md-12">
        <div class="card ">
          <div class="card-body">
            <form action="/quotation/{{$quotations->id}}"  enctype="multipart/form-data" method="post">
              @method('PUT')
              @csrf
              {{-- @dd($quotations) --}}

              <!-- CATEGORY -->
              <div class="form-group col-md-2 has-label">
                <label for="category_id" >Elija una Categoría</label>
                <select class="form-control" name="categody_id">
                  @forelse($categories as $category)
                  <option  value="{{ $quotations->category->category_car_name }}"
                    @if($quotations->category_id === $category->id)
                    selected='selected'
                    @endif>
                    {{ $category->category_car_name }}
                  </option>
                  @empty
                  <option>No hay marcas registradas.</option>
                  @endforelse
                </select>
              </div>
              <!-- /CATEGORY -->

              <!-- PATTERN -->
              <div class="form-group col-md-3 has-label">
                <label for="pattern_id" >Elija una Modelo</label>
                <select class="form-control" name="pattern_id">
                  @forelse($patterns as $pattern)
                  <option  value="{{ $quotations->pattern->pattern_name }}"
                    @if($quotations->pattern_id === $pattern->id) selected='selected' @endif>
                    {{ $pattern->pattern_name }}</option>
                    @empty
                    <option>No hay modelos registradas.</option>
                    @endforelse
                  </select>
                </div>
                <!-- /PATTERN -->

                <!-- BRAND -->
                <div class="form-group col-md-2 has-label ">
                  <label for="">Marca</label>
                  <input type="text" readonly class="form-control" name="brand_name"
                  @if($quotations->brand_id === $quotations->pattern->brand_id)
                  value="{{$quotations->brand->brand_name}}"
                  @else
                  value="{{$pattern->brand_name}}"
                  @endif
                  >
                </div>
                <!-- /BRAND -->

                <!-- TYPE -->
                <div class="form-group col-md-2 has-label">
                  <label for="type_id">Elija una Tipo</label>
                  <select class="form-control" name="type_id">
                    @forelse($types as $type)
                    <option  value="{{$quotations->type->type_name }}"
                      @if($quotations->type_id === $type->id) selected='selected' @endif>
                      {{ $type->type_name }}</option>
                      @empty
                      <option>No hay modelos registradas.</option>
                      @endforelse
                    </select>
                  </div>
                  <!-- /TYPE -->

                  <!-- TRANSMISSIÓN -->
                  <div class="form-group col-md-3 has-label">
                    <label for="transmission_id" >Elija una Transmisión  </label>
                    <select class="form-control" name="transmission_id">
                      @forelse($transmissions as $transmission)
                      <option  value="{{ $quotations->transmission->transmission_name }}"
                        @if($quotations->transmission_id === $transmission->id) selected='selected' @endif>
                        {{ $transmission->transmission_name }}</option>
                        @empty
                        <option>No hay marcas registradas.</option>
                        @endforelse
                      </select>
                    </div>
                    <!-- /TRANSMISSIÓN -->

                    <div class="form-row car_details">

                      <!-- PASSENGERS -->
                      <div class=" form-group col-md-3 has-label quantities inc-button-container">
                        <label for="passengerCuantity" ><i class="fas fa-user-friends"></i></label>
                        <button class="cart-qty-plus btn-theme-dark" type="button" value="+">
                          <i class="fas fa-plus fa-align-center "></i>
                        </button>
                        <input type="text"  class="input-text qty quantity " type="text" name="passengerQuantity" value="{{$quotations->passengerQuantity}}" >
                        <button class="cart-qty-minus btn-theme-dark" type="button" value="-"><i class="fas fa-minus fa-align-center "></i></button>
                      </div>
                      <!-- /PASSENGERS -->

                      <!-- BIG LAUGAGGE -->
                      <div class=" form-group col-md-3 has-label quantities inc-button-container">
                        <label for="luggageBigCuantity" ><i class="fa fa-suitcase-rolling &f5c1 fa-lg"></i></label>
                        <button class="cart-qty-plus btn-theme-dark" type="button" value="+">
                          <i class="fas fa-plus fa-align-center "></i>
                        </button>
                        <input type="text"  class="input-text qty quantity " type="text" name="luggageBigQuantity" value="{{$quotations->luggageBigQuantity}}" >
                        <button class="cart-qty-minus btn-theme-dark" type="button" value="-"><i class="fas fa-minus fa-align-center "></i></button>
                      </div>
                      <!-- /BIG LAUGAGGE -->

                      <!-- SMALL LAUGAGGE -->
                      <div class=" form-group col-md-3 has-label quantities inc-button-container">
                        <label for="luggageBigCuantity" ><i class="fa fa-suitcase-rolling &f5c1 fa-sm"></i></label>
                        <button class="cart-qty-plus btn-theme-dark" type="button" value="+">
                          <i class="fas fa-plus fa-align-center "></i>
                        </button>
                        <input type="text"  class="input-text qty quantity " type="text" name="luggageSmallQuantity" value="{{$quotations->luggageSmallQuantity}}" >
                        <button class="cart-qty-minus btn-theme-dark" type="button" value="-"><i class="fas fa-minus fa-align-center "></i></button>
                      </div>
                      <!-- /SMALL LAUGAGGE -->

                      <!-- KM_X_LT -->
                      <div class=" form-group col-md-3 has-label quantities inc-button-container">
                        <label for="km_x_lts" ><i class="fa fa-road"></i>/<i class="fas fa-gas-pump"></i></label>
                        <button class="cart-qty-plus btn-theme-dark" type="button" value="km_x_lts">
                          <i class="fas fa-plus fa-align-center "></i>
                        </button>
                        <input type="text"  class="input-text qty quantity " type="text" name="km_x_lts" value="{{$quotations->km_x_lts}}" >
                        <button class="cart-qty-minus btn-theme-dark" type="button" value="-"><i class="fas fa-minus fa-align-center "></i></button>
                      </div>

                      <!-- /KM_X_LT -->
                    </div>

                      <!-- CARTEXT -->
                      <div class="form-group has-label">
                        <label for="input-message">Descripción</label>
                        <textarea name="carText" id="input-message" placeholder="Descripción" rows="4" cols="50"  data-toggle="tooltip" class="quotation-text-input form-control ">{{$quotations->carText}}</textarea>
                      </div>
                      <!-- /CARTEXT -->

                    <!-- IMAGES -->
                    <div class="form-group">
                      <x-form-fileinput>

                      </x-form-fileinput>
                    </div>
                    <!-- /IMAGES -->

                    <!-- BUTTONS -->
                    <div class=" form-group ">
                      <div class="back-office-buttons col-md-6">
                        <button type="submit" class="btn btn-submit btn-theme btn-theme-dark btn-block">Guardar</button>
                        <a href="{{app('request')->input('id')}}" class="btn btn-submit btn-theme btn-theme-dark btn-block ">Cancelar</a>
                      </div>
                      <div class=" form-group back-office-rigth-buttons col-md-6">
                        <a href="{{route('quotation.create')}}" class="btn btn-submit btn-theme btn-theme-dark btn-block ">Crear</a>
                      </div>
                    </div>
                    <!-- /BUTTONS -->
                  </form>
                  <form>
                  <div class="card-body col-md-6">
                        <a href="{{route('quotation.index')}}" class="btn btn-submit btn-theme btn-theme-dark btn-block ">Volver al Listado</a>
                        <a href="{{ route ('quotation.destroy',$quotations->id) }}"class="btn btn-submit btn-theme btn-theme-dark btn-block ">Borrar</a>
                   </div>
               </form>
                  @if (count($errors->all())>0)
                  <ul class="fluid alert alert-danger" role="alert">
                    @foreach ($errors->all() as $error)
                    <li>{{$error}} </li>
                    @endforeach
                  </ul>
                  @endif
                  <!-- /CONTENT AREA -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endsection
