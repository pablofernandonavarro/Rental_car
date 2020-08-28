@extends('layouts.admin-master')
@section('content')
    <main class="content-area">
        <section class="page-section breadcrumbs text-left">
            <div class="container">
                <div class="page-header">
                    <hr class="page-divider half"/>
                    <h1>Bienvenido {{Auth::user()->name}}</h1>
                    <hr class="page-divider half"/>
                    <hr class="page-divider half"/>
                </div>
            </div>
        </section>
        <section class="page-section">
            {{-- Perfil del usuario --}}
            <div class="container">
                <div class="row">
                    <aside class="col-md-6">
                        <h3 class="section-title"> <span>{{Auth::user()->name}}</span></h3>
                        
                        <div class="widget shadow ">
                            <h2 class="widget-title"><span>Mi perfil</span></h2>
                            <div class="widget-content">
                                <div class="media">
                                    <div class="media-body">
                                        <h3 class="widget-title"><span>Modificar perfil</span></h3>
                                        <form action="/ownerdata" method="post" class="form-group">
                                            @method('PUT')
                                            @csrf
                                            <div class="form-group col-md-12">
                                                <label for="">Direccion</label>
                                                <input type="text" class="form-control" name="owner_address" value="{{$ownerdatas->owner_address}}">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="">Telefono 1</label>
                                                <input type="text" class="form-control" name="owner_phone1" value="{{$ownerdatas->owner_phone1}}">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="">Telefono 2</label>
                                                <input type="text" class="form-control" name="owner_phone2" value="{{$ownerdatas->owner_phone2}}">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="">Email 1</label>
                                                <input type="text" class="form-control" name="owner_mail1" value="{{$ownerdatas->owner_mail1}}">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="">Email 2</label>
                                                <input type="text" class="form-control" name="owner_mail2" value="{{$ownerdatas->owner_mail2}}">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="">Sitio web</label>
                                                <input type="text" class="form-control" name="owner_website" value="{{$ownerdatas->owner_website}}">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="">WhatsApp</label>
                                                <input type="text" class="form-control" name="owner_whatsapp" value="{{$ownerdatas->owner_whatsapp}}">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="">Link a Instagram</label>
                                                <input type="text" class="form-control" name="owner_instagram" value="{{$ownerdatas->owner_instagram}}">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="">Link a Facebook</label>
                                                <input type="text" class="form-control" name="owner_facebook" value="{{$ownerdatas->owner_facebook}}">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <button type="submit" class="btn btn-submit btn-theme btn-theme-dark btn-block">Actualizar</button>
                                            </div>
                                        </form>

                                        <hr class="page-divider half"/>
                                        <h3 class="widget-title"><span>Actualizar contraseña</span></h3>
                                        <form action="/password-reset" method="post" class="form-group" id="passwordreset">
                                            @method('PUT')
                                            @csrf
                                            <div class="form-group col-md-12">
                                                <label for="">Contraseña anterior</label>
                                                <input type="password" class="form-control" name="last_password" value="">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="">Nueva contraseña</label>
                                                <input type="password" class="form-control" name="new_password" value="">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="">Repetir contraseña</label>
                                                <input type="password" class="form-control" name="verify_password" value="">
                                            </div>
                                            <div class="form-group col-md-5">
                                                <button type="submit" class="btn btn-submit btn-theme btn-theme-dark btn-block">Actualizar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                    {{-- Seccion de cotizaciones --}}
                    <aside class="col-md-6">
                        <h2 class="section-title"><span>Ultimas cotizaciones</span></h2>
                        @forelse ($quotations as $quo)
                            <div class="widget shadow ">
                                <h4 class="widget-title">DE <span>{{$quo->client->first_name}}</span></h4>
                                <div class="widget-content">
                                    <div class="recent-tweets">
                                        <div class="media">
                                            <div class="media-body">
                                                <p class="caption-text">Rentado desde <strong>{{ \Carbon\Carbon::createFromTimestamp(strtotime($quo->first_date))->toFormattedDateString() }}</strong> hasta <strong>{{ \Carbon\Carbon::createFromTimestamp(strtotime($quo->last_date))->toFormattedDateString() }}</strong></p>
                                                <p class="caption-text">Retiro en <strong>{{$quo->retreat_place}}</strong> devuelvo en <strong>{{$quo->return_place}}</strong></p>
                                                {{-- <p>Tipo de auto <strong>{{$quo->category->category_car_name}}</strong></p> --}}
                                                <p style="padding:3%;">{{$quo->comments}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="widget shadow">
                                <h4 class="widget-title"><span>No se encontraron cotizaciones</span></h4>
                            </div>
                        @endforelse
                    </aside>
                </div>
            </div>
        </section>
        @if (session('message'))
            <div class="widget shadow">
                {{session('message')}}
            </div>
        @endif
    </main>  
@endsection