@extends('layouts.admin-master')
@section('content')
<link rel="stylesheet" href="/css/edit_car.css">
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
                        <form action="/car/{{$cars->id}}"  enctype="multipart/form-data" method="post">
                            @method('PUT')
                            @csrf
                            {{-- @dd($cars) --}}

                            <!-- CATEGORY -->
                            <div class="form-group col-md-2 has-label">
                                <label for="category_id" >Elija una Categoría</label>
                                <select class="form-control" name="category_id">
                                    @forelse($categories as $category)
                                        @if($cars->category_id === $category->id)
                                            <option  value="{{ $category->id }}" selected='selected'>{{ $category->category_car_name }}</option>
                                        @else
                                            <option  value="{{ $category->id }}" >{{ $category->category_car_name }}</option>
                                        @endif
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
                                        @if($cars->pattern->id === $pattern->id)
                                            <option  value="{{ $pattern->id }}" selected='selected'>{{ $pattern->pattern_name }}</option>
                                        @else
                                            <option  value="{{ $pattern->id }}">{{ $pattern->pattern_name }}</option>
                                        @endif
                                    @empty
                                        <option>No hay modelos registradas.</option>
                                    @endforelse
                                    </select>
                                </div>
                                <!-- /PATTERN -->

                                <!-- BRAND -->
                                <div class="form-group col-md-2 has-label ">
                                    <label for="">Marca</label>
                                    <input type="text" readonly class="form-control" name="brand" id="brand" value="{{$cars->brand->brand_name}}">
                                </div>
                                <!-- /BRAND -->

                                    <!-- TRANSMISSIÓN -->
                                    <div class="form-group col-md-3 has-label">
                                        <label for="transmission_id" >Elija una Transmisión  </label>
                                        <select class="form-control" name="transmission_id">
                                            @forelse($transmissions as $transmission)
                                                @if($cars->transmission->id === $transmission->id)
                                                    <option value="{{ $transmission->id }}" selected='selected'>{{ $transmission->transmission_name }}</option>
                                                @else
                                                    <option value="{{ $transmission->id }}">{{ $transmission->transmission_name }}</option>
                                                @endif    
                                                @empty
                                                <option>No hay transmisiones.</option>
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
                                                <input type="text"  class="input-text qty quantity " type="text" name="passengerQuantity" value="{{$cars->passengerQuantity}}">
                                              
                                                <button class="cart-qty-minus btn-theme-dark" type="button" value="-"><i class="fas fa-minus fa-align-center "></i></button>
                                            </div>
                                            <!-- /PASSENGERS -->

                                            <!-- BIG LAUGAGGE -->
                                            <div class=" form-group col-md-3 has-label quantities inc-button-container">
                                                <label for="luggageBigCuantity" ><i class="fa fa-suitcase-rolling &f5c1 fa-lg"></i></label>
                                                <button class="cart-qty-plus btn-theme-dark" type="button" value="+">
                                                    <i class="fas fa-plus fa-align-center "></i>
                                                </button>
                                                <input type="text"  class="input-text qty quantity " type="text" name="luggageBigQuantity" value="{{$cars->luggageBigQuantity}}" >
                                                <button class="cart-qty-minus btn-theme-dark" type="button" value="-"><i class="fas fa-minus fa-align-center "></i></button>
                                            </div>
                                            <!-- /BIG LAUGAGGE -->

                                            <!-- SMALL LAUGAGGE -->
                                            <div class=" form-group col-md-3 has-label quantities inc-button-container">
                                                <label for="luggageBigCuantity" ><i class="fa fa-suitcase-rolling &f5c1 fa-sm"></i></label>
                                                <button class="cart-qty-plus btn-theme-dark" type="button" value="+">
                                                    <i class="fas fa-plus fa-align-center "></i>
                                                </button>
                                                <input type="text"  class="input-text qty quantity " type="text" name="luggageSmallQuantity" value="{{$cars->luggageSmallQuantity}}" >
                                                <button class="cart-qty-minus btn-theme-dark" type="button" value="-"><i class="fas fa-minus fa-align-center "></i></button>
                                            </div>
                                            <!-- /SMALL LAUGAGGE -->

                                            <!-- KM_X_LT -->
                                            <div class=" form-group col-md-3 has-label quantities inc-button-container">
                                                <label for="km_x_lts" ><i class="fa fa-road"></i>/<i class="fas fa-gas-pump"></i></label>
                                                <button class="cart-qty-plus btn-theme-dark" type="button" value="km_x_lts">
                                                    <i class="fas fa-plus fa-align-center "></i>
                                                </button>
                                                <input type="text"  class="input-text qty quantity " type="text" name="km_x_lts" value="{{$cars->km_x_lts}}" >
                                                <button class="cart-qty-minus btn-theme-dark" type="button" value="-"><i class="fas fa-minus fa-align-center "></i></button>
                                            </div>
                                            

                                            <!-- /KM_X_LT -->
                                        </div>
                                        {!!$errors->first('passengerQuantity','<small class="alert alert-danger" role="alert">:message </small>')!!}
                                        <br><br>
                                        {!!$errors->first('luggageBigQuantity','<small class="alert alert-danger" role="alert">:message </small>')!!}
                                        <br><br>
                                        {!!$errors->first('luggageSmallQuantity','<small class="alert alert-danger" role="alert">:message </small>')!!}
                                        <br><br>
                                        {!!$errors->first('km_x_lts','<small class="alert alert-danger" role="alert">:message </small>')!!}
                                        
                           
                                    <div class="car-text-area">
                                        <!-- CARTEXT_ES -->
                                        <div class="form-group has-label col-md-4">
                                            <label for="input-message">Descripción en Español</label>
                                            <textarea name="text_es" id="input-message" placeholder="Descripción" rows="4" cols="50"  data-toggle="tooltip" class="car-text-input form-control " value=" ">
                                                {{$cars->text_es}}
                                            </textarea>
                                        </div>
                                    <!-- /CARTEXT_ES -->

                                    <!-- CARTEXT_EN -->
                                    <div class="form-group has-label col-md-4">
                                        <label for="input-message">Descripción en Inglés</label>
                                        <textarea name="text_en" id="input-message" placeholder="Descripción" rows="4" cols="50"  data-toggle="tooltip" class="car-text-input form-control ">
                                            {{$cars->text_en}}
                                        </textarea>
                                    </div>
                                    <!-- /CARTEXT_EN -->

                                    <!-- CARTEXT_PT-BR -->
                                    <div class="form-group has-label col-md-4">
                                        <label for="input-message">Descripción en Portugués</label>
                                        <textarea name="text_pt" id="input-message" placeholder="Descripción" rows="4" cols="50"  data-toggle="tooltip" class="car-text-input form-control ">
                                            {{$cars->text_pt}}
                                        </textarea>
                                    </div>
                                    <!-- /CARTEXT_PT-BR -->

                        </div>
                        <div class="form-group has-label">
                            <label for="images">Imagenes</label>
                            
                            <div class="form-control row " >
                                <div class="">
                                  @foreach ($cars->images as $image) 
                                    <img src="{{$image->image_name}}" class="content_image col-md-3" width="200" alt="">
                                  @endforeach
                                </div>
                            </div>
                    
                        </div>

                            <!-- IMAGES -->
                            <div class="form-group has-label">
                                <label for="images">Añadir Imagenes</label>
                                <input type="file" name="image_name[]" id="image_name[]"              class="form-control" placeholder="" aria-describedby="helpId" multiple    accept="image/*">
                                <small id="helpId" class="text-muted">Puede Agregar hasta 8 imagenes por auto </small>
                                <br>
                                <small id="helpId" class="text-muted">El limite Puede ser 1024 mb por imagen</small>
                                <br>
                                <small id="helpId" class="text-muted">Puede Agregar archivos de tipo jpeg,png, jpg, gif</small>
                            </div>

                            <!-- /IMAGES -->

                            <!-- BUTTONS -->
                            <div class=" form-group ">
                                <div class="back-office-buttons col-md-6">
                                    <button type="submit" class="btn btn-submit btn-theme btn-theme-dark btn-block">Guardar</button>
                                    <a href="{{app('request')->input('id')}}" class="btn btn-submit btn-theme btn-theme-dark btn-block ">Cancelar</a>
                                </div>
                                <div class=" form-group back-office-rigth-buttons col-md-6">
                                    <a href="{{route('car.create')}}" class="btn btn-submit btn-theme btn-theme-dark btn-block ">Crear</a>
                                </div>
                            </div>
                            <!-- /BUTTONS -->
                        </form>
                        <form>
                            <div class="card-body col-md-6">
                                <a href="{{route('car.index')}}" class="btn btn-submit btn-theme btn-theme-dark btn-block ">Volver al Listado</a>
                                <a href="{{ route ('car.destroy',$cars->id) }}"class="btn btn-submit btn-theme btn-theme-dark btn-block ">Borrar</a>
                            </div>
                        </form>
                       
                        <!-- /CONTENT AREA -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
let model = document.getElementById('pattern_id');
let brand = document.getElementById('brand');
console.log(model, brand);

model.addEventListener('change',(e) => {
  fetch(`https://www.mendozarental.com/api-brands/${e.target.value}`)
  .then(response => response.json())
  .then(data => brand.value = data.brand_name)
  .catch(error => console.log(error))
});
</script>
@endsection
