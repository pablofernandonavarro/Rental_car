<div class="form-search light">
  <form action="/savequotation" method="POST">
    @method('POST')
    @csrf
    <div class="form-title about-team-horizontal">
      <h2>{{ trans ('sentence.contact-senetence1') }}</h2>
      <img   src="{{asset ('assets/ico/new_Recurso 2.svg')}}">
    </div>
    <div class="row row-inputs">
      <div class="container-fluid">
        {{-- <div class="col-sm-6"> --}}
          <div class="form-group has-icon has-label col-sm-6">
            <label for="quotation_name">{{ trans('sentence.contact-name')}}</label>
            <input type="text" class="form-control" name="quotation_name" id="quotation_name" placeholder="{{ trans('sentence.contact-name')}} ">
            {{-- <span class="form-control-icon"></span> --}}
          </div>
        {{-- </div> --}}
        {{-- <div class="col-sm-6"> --}}
          <div class="form-group has-icon has-label col-sm-6">
            <label for="quotation_phone">{{ trans('sentence.contact-phone') }}</label>
            <input type="text" class="form-control" name="quotation_phone" id="quotation_phone" placeholder="{{ trans('sentence.contact-phone') }}">
            {{-- <span class="form-control-icon"></span> --}}
          </div>
        {{-- </div> --}}
        {{-- <div class="col-sm-12"> --}}
          <div class="form-group has-icon has-label col-sm-12">
            <label for="quotation_email">Email</label>
            <input type="text" class="form-control" name="quotation_email"   id="quotation_email" placeholder="Email">
            {{-- <span class="form-control-icon"></span> --}}
          </div>
        {{-- </div> --}}
      </div>
    </div>
    <div class="row row-inputs">
      <div class="container-fluid">
        {{-- <div class="col-sm-6"> --}}
          <div class="form-group has-icon has-label col-sm-6">
            <label for="retreat_place">{{ trans('sentence.contact-retreat-loc') }}</label>
            <select name="retreat_place" id="retreat_place" class="form-control">
              <option value="Mendoza">Mendoza</option>
            </select>
            <span class="form-control-icon"><i class="fa fa-map-marker"></i></span>
          </div>
        {{-- </div> --}}
        {{-- <div class="col-sm-6"> --}}
          <div class="form-group has-icon has-label col-sm-6">
            <label for="return_place">{{ trans('sentence.contact-return-loc') }}</label>
            <select name="return_place" id="return_place" class="form-control">
              <option value="Mendoza">Mendoza</option>
            </select>
            <span class="form-control-icon"><i class="fa fa-map-marker"></i></span>
          </div>
        {{-- </div> --}}
{{--       </div>
    </div>

    <div class="row row-inputs">
      <div class="container-fluid">
 --}}        <div class="col-sm-6 outer required">
          {{-- <div class="outer required"> --}}
            <div class="form-group has-icon has-label">
              <label for="quotation_first_date">{{ trans('sentence.contact-retreat-datetime') }}</label>
              <input name="quotation_first_date" type='text' value="" autocomplete="off" class="datepicker-here form-control" data-timepicker="true" data-language='es' data-time-format='hh:ii'  data-minutes-step='15' data-position="bottom center" id="first_date" placeholder="dd/mm/yyyy hh:mm"/>
              <span class="form-control-icon"><i class="fa fa-calendar fa-sm"></i>/<i class="fa fa-clock-o fa-sm"></i></span>
            </div>
          </div>
        {{-- </div> --}}
        {{-- <div class="col-sm-6"> --}}
          {{-- <div class="outer required"> --}}
            <div class="form-group has-icon has-label outer required col-sm-6">
              <label for="quotation_last_date">{{ trans('sentence.contact-return-datetime') }}</label>
              <input name="quotation_last_date" value="" type='text' autocomplete="off" class="datepicker-here form-control" data-timepicker="true" data-language='es' data-time-format='hh:ii' data-minutes-step='15'  data-position="top center" id="quotation last_date" placeholder="dd/mm/yyyy hh:mm"/>
              <span class="form-control-icon"><i class="fa fa-calendar fa-sm"></i>/<i class="fa fa-clock-o fa-sm"></i></span>
            {{-- </div> --}}
          {{-- </div> --}}
        </div>
        {{-- <div class="col-sm-12"> --}}
          {{-- <div class="outer required"> --}}
            <div class="form-group selectpicker-wrapper outer required col-sm-12">
              <label for="quotation_category">{{ trans('sentence.contact-car-category') }}</label>
              <select name="quotation_category" value="" type="text" class="selectpicker input-price" data-live-search="true" data-width="100%"data-toggle="tooltip" title="Select">
                @foreach ($category as  $value)
                  <option value="{{$value->id}}">{{$value->category_car_name}}</option>
                @endforeach
              </select>
            </div>
          {{-- </div> --}}
        {{-- </div>
        <div class="col-sm-12"> --}}
          {{-- <div class="outer required"> --}}
            <div class="form-group has-icon has-label outer required col-sm-12">
              <label for="input-message">{{ trans('sentence.contact-message') }}</label>
              <textarea name="quotation_comments" id="input-message" placeholder="{{ trans('sentence.contact-message') }}" rows="4" cols="50"data-toggle="tooltip" title="Message is required"class="form-control placeholder"></textarea>
            {{-- </div> --}}
          {{-- </div> --}}
        </div>
      </div>
      <div class="row row-submit">
        <div class="container-fluid">
          <div class="inner">
            <div class="col-6 ">
              <button type="submit" id="formSubmit" class="btn btn-theme-dark pull-left">{{ trans('sentence.contact-send') }}</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>
