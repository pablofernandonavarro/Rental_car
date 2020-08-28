<div class="widget shadow widget-find-car">
  <h4 class="widget-title">{{ trans('sentence.contact-third-title')}}</h4>
  <div class="widget-content">
    <div class="form-search light">
      <form action="/savequotation" method="POST">
        @method('post')
        @csrf
        <div class="outer required">
          <div class="form-group has-icon has-label">
            <label for="quotation_name">{{ trans('sentence.contact-name') }}</label>
            <input
            type="text" name="quotation_name" id="quotation_name" placeholder="{{ trans('sentence.contact-name') }}" value="" size="30"
            data-toggle="tooltip" title="Name is required"
            class="form-control placeholder"/>
            @error('quotation_name')
            <div class="text-danger">{{$message}}</div>
            @enderror
          </div>
        </div>
        <div class="outer required">
          <div class="form-group has-icon has-label">
            <label for="quotation_email">Email</label>
            <input
            type="text" name="quotation_email" id="quotation_email" placeholder="Email" value="" size="30"
            data-toggle="tooltip" title="Email is required"
            class="form-control placeholder"/>
            @error('quotation_email')
            <div class="text-danger">{{$message}}</div>
            @enderror
          </div>
          <div class="outer required">
            <div class="form-group has-icon has-label">
              <label for="quotation_phone">{{ trans('sentence.contact-phone') }}</label>
              <input
              type="text" name="quotation_phone" id="quotation_phone" placeholder="xxxxxxxx" value="" size="30"
              data-toggle="tooltip"
              class="form-control placeholder"/>
              @error('quotation_phone')
              <div class="text-danger">{{$message}}</div>
              @enderror
            </div>
          </div>
          <div class="outer required">
            <div class="form-group has-icon has-label">
              <label for="retreat_place">{{ trans('sentence.contact-retreat-loc') }}</label>
              {{-- <input name="retreat_place" value="" type="text" class="form-control" id="retreat_place" placeholder="Ciudad o Aeropuerto"> --}}
              <select name="retreat_place" id="retreat_place" class="form-control">
                <option value="Mendoza">Mendoza</option>
              </select>
              <span class="form-control-icon"><i class="fa fa-map-marker"></i></span>
              @error('retreat_place')
              <div class="text-danger">{{$message}}</div>
              @enderror
            </div>
          </div>
          <div class="outer required">
            <div class="form-group has-icon has-label">
              <label for="return_place">{{ trans('sentence.contact-return-loc') }}</label>
              {{-- <input name="return_place" value="" type="text" class="form-control" id="return_place" placeholder="Ciudad o Aeropuerto"> --}}
              <select name="return_place" id="return_place" class="form-control">
                <option value="Mendoza">Mendoza</option>
              </select>
              <span class="form-control-icon"><i class="fa fa-map-marker"></i></span>
              @error('return_place')
              <div class="text-danger">{{$message}}</div>
              @enderror
            </div>
          </div>
          <div class="outer required">
            <div class="form-group has-icon has-label">
              <label for="quotation_first_date">{{ trans('sentence.contact-retreat-datetime') }}</label>
              <input name="quotation_first_date" type='text' value="" class="datepicker-here form-control" data-timepicker="true" data-language='es' data-time-format='hh:ii'  data-minutes-step='15' data-position="bottom center" id="first_date" placeholder="dd/mm/yyyy hh:mm"/>
              {{-- <input type="text" class="form-control" id="formSearchUpDate3" placeholder="dd/mm/yyyy"> --}}
              <span class="form-control-icon"><i class="fa fa-calendar"></i>/<i class="fa fa-clock-o"></i></span>
              @error('quotation_first_date')
              <div class="text-danger">{{$message}}</div>
              @enderror
            </div>
          </div>
          <div class="outer required">
            <div class="form-group has-icon has-label">
              <label for="quotation_last_date">{{ trans('sentence.contact-return-datetime') }}</label>
              <input name="quotation_last_date" value="" type='text'  class="datepicker-here form-control" data-timepicker="true" data-language='es' data-time-format='hh:ii' data-minutes-step='15'  data-position="top center" id="last_date" placeholder="dd/mm/yyyy hh:mm"/>
              {{-- <input type="text" class="form-control" id="formSearchUpDate3" placeholder="dd/mm/yyyy"> --}}
              <span class="form-control-icon"><i class="fa fa-calendar"></i>/<i class="fa fa-clock-o"></i></span>
              @error('quotation_last_date')
              <div class="text-danger">{{$message}}</div>
              @enderror
            </div>
          </div>
          <div class="outer required">
            <div class="form-group selectpicker-wrapper">
              <label for="quotation_category">{{ trans('sentence.contact-car-category') }}</label>
              <select name="quotation_category" value="" type="text"
              class="selectpicker input-price" data-live-search="true" data-width="100%"
              data-toggle="tooltip" title="Select">
              @foreach ($category as  $value)
              <option value="{{$value->id}}">
                {{$value->category_car_name}}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="outer required">
            <div class="form-group selectpicker-wrapper">
              <label for="quotation_type">{{ trans('sentence.contact-age') }}</label>
              <input name="quotation_birth_date" value="" type='text'  class="datepicker-here form-control" data-picker="true" data-language='es'   data-position="top center" id="birth_date" placeholder="dd/mm/yyyy"/>
               <span class="form-control-icon"><i class="fa fa-calendar"></i></span>

          </div>
        </div>
        <div class="outer required">
          <div class="form-group has-icon has-label">
            <label for="input-message">{{ trans('sentence.contact-message') }}</label>
            <textarea name="quotation_commets" id="input-message" placeholder="{{ trans('sentence.contact-message') }}" rows="4" cols="50"
            data-toggle="tooltip" title="Message is required"
            class="form-control placeholder"></textarea>
          </div>
        </div>
        <button type="submit" id="formSearchSubmit3" class="btn btn-submit btn-theme btn-theme-dark btn-block">{{ trans('sentence.contact-send') }}</button>
      </form>
    </div>
  </div>
</div>
<script src="{{url('js/provinces.js')}}"></script>
