
<!-- FOOTER -->
<footer class="footer">
    <div class="footer-widgets">
        <div class="container">
            <div class="row">

                <div class="col-md-8">
                    <div class="widget widget-footer">
                        <h4 class="widget-title">{{ trans('sentence.about-main-title') }}</h4>
                        <div class="">
                            <ul class="{{-- media-list contact-list --}}">
                                <li class="media">
                                    <div class="media-left"><i class="fa fa-home"></i></div>
                                    <div class="media-body">{{ trans('sentence.footer-address')}}: {{$owner_datas->owner_address}}</div>
                                </li>

                                <li class="media">
                                    <div class="media-left"><i class="fa fa-phone"></i></div>
                                    <div class="media-body">{{ trans('sentence.footer-phone')}}: {{$owner_datas->owner_phone1}}</div>
                                    <div class="media-left"><i class="fa fa-phone"></i></div>
                                    <div class="media-body">{{ trans('sentence.footer-phone')}}: {{$owner_datas->owner_phone2}}</div>
                                </li>
                                <li class="media">
                                    <div class="media-left"><i class="fa fa-envelope"></i></div>
                                    <div class="media-body">Email: {{$owner_datas->owner_mail1}}</div>
                                    <div class="media-left"><i class="fa fa-clock-o"></i></div>
                                    <div class="media-body">{{ trans('sentence.footer-working-hs')}}</div>
                                </li>
                                <li class="media">
                                    <div class="media-left"><i class="fa fa-map-marker"></i></div>
                                    <div class="media-body ">
                                        <a href="https://goo.gl/maps/AStHcA5EvjbNpDLS7"><button class="btn-theme-dark" >
                                                {{ trans('sentence.footer-see-in-map')}}</button></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="widget widget-categories widget-footer">
                        <h4 class="widget-title">{{ trans('sentence.footer-info') }}</h4>
                        <ul>
                            <li><a href="/contact">{{ trans('sentence.nav-contact') }}</a></li>
                            <li><a href="/car-listing">{{ trans('sentence.nav-car-listing') }}</a></li>
                            <li><a href="/faqs">{{ trans('sentence.nav-faqs')}} </a></li>
                            <li><a href="/requirements">{{ trans('sentence.nav-requirements')}} </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-meta">
        <div class="container">
            <div class="row">

                <div class="col-sm-12">
                    <p class="btn-row text-center">
                        <a href="https://api.whatsapp.com/send?phone=+5492615369809" class="btn btn-theme btn-icon-left whatsapp"><i class="fa fa-whatsapp"></i>WHATSAPP</a>
                    </p>
                    <div class="copyright">&copy; 2020 MendozaRental — Desarrollado por UPHO <img src="assets/img/UPHO LOGO BN.jpg" alt="UPHO-LOGO-BN"/></div>
                </div>

            </div>
        </div>
    </div>
</footer>
<!-- /FOOTER -->

<div id="to-top" class="to-top"><i class="fa fa-angle-up"></i></div>
{{-- <script src="{{asset('/js/script_map.js')}}"></script> --}}
