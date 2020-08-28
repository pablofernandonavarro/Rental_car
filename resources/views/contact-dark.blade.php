<section class="page-section contact dark">
    <div class="container">

        <!-- Get in touch -->

        <h2 class="section-title">
            <small>{{ trans('sentence.contact-senetence2')}}</small>
            <span>{{ trans('sentence.contact-fourth-title')}} !</span>
        </h2>

        <div class="row">
            <div class="col-md-6">
                <!-- Contact form -->
                <form name="contact-form" method="post" action="#" class="contact-form alt" id="contact-form">

                    <div class="row">
                        <div class="col-md-6">

                            <div class="outer required">
                                <div class="form-group af-inner has-icon">
                                    <label class="sr-only" for="name">{{ trans('sentence.contact-name')}}</label>
                                    <input
                                    type="text" name="name" id="name" placeholder="{{ trans('sentence.contact-name')}}" value="" size="30"
                                    data-toggle="tooltip" title="Name is required"
                                    class="form-control placeholder"/>
                                    <span class="form-control-icon"><i class="fa fa-user"></i></span>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">

                            <div class="outer required">
                                <div class="form-group af-inner has-icon">
                                    <label class="sr-only" for="email">Email</label>
                                    <input
                                    type="text" name="email" id="email" placeholder="Email" value="" size="30"
                                    data-toggle="tooltip" title="Email is required"
                                    class="form-control placeholder"/>
                                    <span class="form-control-icon"><i class="fa fa-envelope"></i></span>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="form-group af-inner has-icon">
                        <label class="sr-only" for="input-message">{{ trans('sentence.contact-message')}}</label>
                        <textarea
                        name="message" id="input-message" placeholder="{{ trans('sentence.contact-message')}}" rows="4" cols="50"
                        data-toggle="tooltip" title="Message is required"
                        class="form-control placeholder"></textarea>
                        <span class="form-control-icon"><i class="fa fa-bars"></i></span>
                    </div>

                    <div class="outer required">
                        <div class="form-group af-inner">
                            <input type="submit" name="submit" class="form-button form-button-submit btn btn-block btn-theme" id="submit_btn" value="{{ trans('sentence.contact-send')}}" />
                        </div>
                    </div>

                </form>
                <!-- /Contact form -->
            </div>
            <div class="col-md-6">
                <ul class="media-list contact-list">
                    <li class="media">
                        <div class="media-left"><i class="fa fa-home"></i></div>
                        <div class="media-body">{{ trans('sentence.footer-address')}}: {{$owner_datas->owner_address}}</div>
                    </li>

                    <li class="media">
                        <div class="media-left"><i class="fa fa-phone"></i></div>
                        <div class="media-body">{{ trans('sentence.contact-phone')}}: {{$owner_datas->owner_phone1}}</div>
                    </li>
                    <li class="media">
                        <div class="media-left"><i class="fa fa-phone"></i></div>
                        <div class="media-body">{{ trans('sentence.contact-phone')}}: {{$owner_datas->owner_phone2}}</div>
                    </li>
                    <li class="media">
                        <div class="media-left"><i class="fa fa-envelope"></i></div>
                        <div class="media-body">Email: {{$owner_datas->owner_mail1}}</div>
                    </li>
                    <li class="media">
                        <div class="media-left"><i class="fa fa-map-marker"></i></div>
                        {{-- <div class="media-body "><button type="button" class="btn-theme-dark" data-toggle="modal" data-target="#myModal" data-lat='-32.891813299999995' data-lng='-68.8426411'>{{ trans('sentence.footer-see-in-map')}}</button></div> --}}
                        <div class="media-body ">
                                        <a href="https://goo.gl/maps/AStHcA5EvjbNpDLS7"><button class="btn-theme-dark" >
                                                {{ trans('sentence.footer-see-in-map')}}</button></a>
                                    </div>
                    </li>
                </div>
            </ul>
        </div>
    </div>

<!-- /Get in touch -->
<!-- Modal -->

</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Mendoza-Rental Nuestra Ubicación</h4>
                <div class="modal-body">
                    <div class="row">
                       {{--  <div class="col-md-12 modal_body_content">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d1675.122852666175!2d-68.84373007937809!3d-32.89167138944192!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x967e09b894bb3595%3A0xe3277fe867acd3c5!2sMendoza%20Rental%2C%20Av.%20Espa%C3%B1a%20948%2C%20M5500%20Mendoza!3m2!1d-32.891813299999995!2d-68.8426411!5e0!3m2!1ses!2sar!4v1587997368743!5m2!1ses!2sar" width="500" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            <p>Some contents...</p>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- <script src="{{asset('/js/script_map.js')}}"></script> --}}
