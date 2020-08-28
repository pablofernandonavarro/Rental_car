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
            <h1>Crear Auto</h1>
          </div>
          <ul class="breadcrumb">
            <li><a href="/index">Home</a></li>
            {{-- <li><a href="#">Pages</a></li> --}}
            <li class="active">Crear auto</li>
          </ul>
        </div>
      </section>
      <div class="col-md-12">
        <div class="card ">
          <div class="card-body">
            <form action="{{route('car.store')}}"  enctype="multipart/form-data" method="post">
              @method('POST')
              @csrf
              <!-- CATEGORY -->
              <div class="form-group col-md-2 has-label">
                <label for="category_id" >Elija una Categoría</label>
                <select class="form-control" name="category_id">
                  @forelse($categories as $category)
                    <option class="form-control" value="{{$category->id}}"
                    @if( old('category_id', $category->id))
                      selected
                    @endif>{{$category->category_car_name}}</option>
                    @empty
                      <option>No hay marcas registradas.</option>
                    @endforelse
                </select>
              </div>
              <!-- /CATEGORY -->

              <!-- PATTERN -->
              <div class="form-group col-md-3 has-label">
                <label for="pattern_id" >Elija una Modelo</label>
                <select class="form-control" name="pattern_id" id="pattern_id">
                  @forelse($patterns as $pattern)
                    <option class="form-control" value="{{$pattern->id}}"
                  @if( old('pattern_id', $pattern->id))
                    selected
                  @endif>{{$pattern->pattern_name}}</option>
                  @empty
                    <option>No hay modelos registradas.</option>
                  @endforelse
                </select>
              </div>
              <!-- /PATTERN -->

              <!-- BRAND -->
              <div class="form-group col-md-2 has-label">
                <label for="">Marca</label>
                <input type="text" class="form-control" id="brand" value="" disabled>
              </div>
              <!-- /BRAND -->

            <!-- TRANSMISSIÓN -->
              <div class="form-group col-md-3 has-label">
                <label for="">Elija una Transmisión</label>
                <select class="form-control" name="transmission_id">
                  @forelse($transmissions as $transmission)
                    <option class="form-control" value="{{$transmission->id}}">{{$transmission->transmission_name}}</option>
                  @empty
                    <option>No hay transmisión selecionada.</option>
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
                  <input type="text"  class="input-text qty quantity " type="text" name="passengerQuantity" value="{{ old ('passengerQuantity')}}" >
                 
                  <button class="cart-qty-minus btn-theme-dark" type="button" value="-">
                    <i class="fas fa-minus fa-align-center "></i>
                  </button>
                 
                </div>
               
                <div>
                  
               
                 
                
                <!-- /PASSENGERS -->

                <!-- BIG LAUGAGGE -->
                <div class=" form-group col-md-3 has-label quantities inc-button-container">
                  <label for="luggageBigCuantity" ><i class="fa fa-suitcase-rolling &f5c1 fa-lg"></i></label>
                  <button class="cart-qty-plus btn-theme-dark" type="button" value="+">
                    <i class="fas fa-plus fa-align-center "></i>
                  </button>
                  <input type="text"  class="input-text qty quantity " type="text" name="luggageBigQuantity" value="{{ old ('luggageBigQuantity')}}" >
                  <button class="cart-qty-minus btn-theme-dark" type="button" value="-">
                    <i class="fas fa-minus fa-align-center "></i>
                  </button>
                </div>
                <!-- /BIG LAUGAGGE -->

                <!-- SMALL LAUGAGGE -->
                <div class=" form-group col-md-3 has-label quantities inc-button-container">
                  <label for="luggageBigCuantity" ><i class="fa fa-suitcase-rolling &f5c1 fa-sm"></i></label>
                  <button class="cart-qty-plus btn-theme-dark" type="button" value="+">
                    <i class="fas fa-plus fa-align-center "></i>
                  </button>
                  <input type="text"  class="input-text qty quantity " type="text" name="luggageSmallQuantity" value="{{ old ('luggageSmallQuantity')}}" >
                  <button class="cart-qty-minus btn-theme-dark" type="button" value="-">
                    <i class="fas fa-minus fa-align-center "></i>
                  </button>
                </div>
                <!-- /SMALL LAUGAGGE -->

                <!-- KM_X_LT -->
                <div class=" form-group col-md-3 has-label quantities inc-button-container">
                  <label for="luggageBigCuantity" ><i class="fa fa-road"></i>/<i class="fas fa-gas-pump"></i></label>
                  <button class="cart-qty-plus btn-theme-dark" type="button" value="+">
                    <i class="fas fa-plus fa-align-center "></i>
                  </button>
                  <input type="text"  class="input-text qty quantity " type="text" name="km_x_lts" value="{{old ('km_x_lt')}}" >
                  <button class="cart-qty-minus btn-theme-dark" type="button" value="-">
                    <i class="fas fa-minus fa-align-center "></i>
                  </button>
                </div>
                
              </div>
             {!!$errors->first('passengerQuantity','<small class="alert alert-danger" role="alert">:message </small>')!!}
             <br><br>
             {!!$errors->first('luggageBigQuantity','<small class="alert alert-danger" role="alert">:message </small>')!!}
             <br><br>
             {!!$errors->first('luggageSmallQuantity','<small class="alert alert-danger" role="alert">:message </small>')!!}
             <br><br>
             {!!$errors->first('km_x_lts','<small class="alert alert-danger" role="alert">:message </small>')!!}
             


                <!-- /KM_X_LT -->
              </div>
              

                <!-- /IMAGES -->
            <div class="car-text-area">
              <!-- CARTEXT_ES -->
                      <div class="form-group has-label col-md-4">
                        <label for="input-message">Descripción en Español</label>
                        <textarea
                        name="car_text_es" id="input-message" placeholder="Descripción" rows="4" cols="50"  data-toggle="tooltip" class="car-text-input form-control "></textarea>
                      </div>
              <!-- /CARTEXT_ES -->

              <!-- CARTEXT_EN -->
                      <div class="form-group has-label col-md-4">
                        <label for="input-message">Descripción en Inglés</label>
                        <textarea
                        name="car_text_en" id="input-message" placeholder="Descripción" rows="4" cols="50"  data-toggle="tooltip" class="car-text-input form-control "></textarea>
                      </div>
              <!-- /CARTEXT_EN -->

              <!-- CARTEXT_PT-BR-->
                      <div class="form-group has-label col-md-4">
                        <label for="input-message">Descripción en Portugués</label>
                        <textarea
                        name="car_text_pt" id="input-message" placeholder="Descripción" rows="4" cols="50"  data-toggle="tooltip" class="car-text-input form-control "></textarea>
                      </div>
              <!-- /CARTEXT_PT-BR -->

            </div class="car-text-area">

                     {{-- IMAGE  --}}

                  <div class="form-group has-label">
                    <label for="images">Añadir Imagenes</label>
                    <input type="file" name="image_name[]" id="image_name[]" class="form-control" placeholder="" aria-describedby="helpId" multiple    accept="image/*">
                      <small id="helpId" class="text-muted">Puede Agregar hasta 8 imagenes por auto </small>
                      <br>
                      <small id="helpId" class="text-muted">El limite Puede ser 1024 mb por imagen</small>
                      <br>
                      <small id="helpId" class="text-muted">Puede Agregar archivos de tipo jpeg,png, jpg, gif</small>
                  </div>
                {{--/IMAGE --}}
              </div>

              <!-- BUTTONS -->
              <div class=" form-group ">
                <div class="back-office-buttons col-md-6">
                  <button type="submit" class="btn btn-submit btn-theme btn-theme-dark btn-block">Crear</button>

                  <a href="{{app('request')->input('id')}}" class="btn btn-submit btn-theme btn-theme-dark btn-block ">Cancelar</a>
                </div>
                <div class=" form-group back-office-rigth-buttons col-md-6">
                  <a href="{{route('car.index')}}" class="btn btn-submit btn-theme btn-theme-dark btn-block ">Volver al Listado</a>
                </div>
              </div>
              <!-- /BUTTONS -->
            </form>
          </div>
        </div>
      </div>
      <div>
      </div>
    </div>
  </div>
</div>
<script>
let model = document.getElementById('pattern_id');
let brand = document.getElementById('brand');

model.addEventListener('change',(e) => {
  fetch(`https://www.mendozarental.com/api-brands/${e.target.value}`)
  .then(response => response.json())
  .then(data => brand.value = data.brand_name)
  .catch(error => console.log(error))
});
</script>
@endsection
