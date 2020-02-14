@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')

  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="row align-bottom">
                <div class="col-md-4">
            <form method="post" action="{{route('front.updateLogo', 1)}}" class="form-horizontal" enctype="multipart/form-data">
            @csrf
                        <img src="/storage/images/{{$front->logo}}" width="100" alt="">
                        {!! Form::file('logo') !!}
                        {{Form::hidden('_method','PUT')}}
                            <button type="submit" class="btn btn-warning">Change Logo</button>
                        {!! Form::close() !!}

                </form>
            </div>


            <div class="col-md-4">
            <form method="post" action="{{route('front.aboutImg', 1)}}" class="form-horizontal" enctype="multipart/form-data">
            @csrf
                        <img src="/storage/images/{{$front->aboutImg}}" width="100" alt="">
                        {!! Form::file('aboutImg') !!}
                        {{Form::hidden('_method','PUT')}}
                            <button type="submit" class="btn btn-warning">Change About Image</button>
                        {!! Form::close() !!}

                </form>
            </div>
            </div>



          <form method="post" action="{{ route('front.update', 1) }}" class="form-horizontal">
@csrf

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Front End Setting</h4>
                <p class="card-category"></p>
              </div>
              <div class="card-body ">
                <div class="row">
                  <div class="col-md-12 text-right">
                      {{-- <a href="{{ route('user.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a> --}}
                  </div>

                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('head') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('head') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('head') ? ' is-invalid' : '' }}" name="head" id="input-head" type="text" placeholder="{{ __('head') }}" value="{{$front->head}}" required="true" aria-required="true"/>
                      @if ($errors->has('head'))
                        <span id="head-error" class="error text-danger" for="input-head">{{ $errors->first('head') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                 <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Tag Line') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('tagLine') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('tagLine') ? ' is-invalid' : '' }}" name="tagLine" id="input-tagLine" type="text" placeholder="{{ __('tagLine') }}" value="{{$front->tagLine}}" required="true" aria-required="true"/>
                      @if ($errors->has('tagLine'))
                        <span id="tagLine-error" class="error text-danger" for="input-tagLine">{{ $errors->first('tagLine') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('About Header') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('aboutHeader') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('aboutHeader') ? ' is-invalid' : '' }}" name="aboutHeader" id="input-aboutHeader" type="text" placeholder="{{ __('aboutHeader') }}" value="{{$front->aboutHeader}}" required="true" aria-required="true"/>
                      @if ($errors->has('aboutHeader'))
                        <span id="aboutHeader-error" class="error text-danger" for="input-aboutHeader">{{ $errors->first('aboutHeader') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                 <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('About Text') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('aboutText') ? ' has-danger' : '' }}">
                      <textarea class="form-control{{ $errors->has('aboutText') ? ' is-invalid' : '' }}" name="aboutText" id="editor" type="text" placeholder="{{ __('aboutText') }}" value="{{$front->aboutText}}" required="true" aria-required="true">{{$front->aboutText}}</textarea>
                      @if ($errors->has('aboutText'))
                        <span id="aboutText-error" class="error text-danger" for="input-aboutText">{{ $errors->first('aboutText') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                 <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Address') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('address') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" id="input-address" type="text" placeholder="{{ __('address') }}" value="{{$front->address}}" required="true" aria-required="true"/>
                      @if ($errors->has('address'))
                        <span id="address-error" class="error text-danger" for="input-address">{{ $errors->first('address') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                 <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('city') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('city') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" id="input-city" type="text" placeholder="{{ __('city') }}" value="{{$front->city}}" required="true" aria-required="true"/>
                      @if ($errors->has('city'))
                        <span id="city-error" class="error text-danger" for="input-city">{{ $errors->first('city') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                 <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('phone') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('phone') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" id="input-phone" type="text" placeholder="{{ __('phone') }}" value="{{$front->phone}}" required="true" aria-required="true"/>
                      @if ($errors->has('phone'))
                        <span id="phone-error" class="error text-danger" for="input-phone">{{ $errors->first('phone') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                 <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('email') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="input-email" type="email" placeholder="{{ __('email') }}" value="{{$front->email}}" required="true" aria-required="true"/>
                      @if ($errors->has('email'))
                        <span id="email-error" class="error text-danger" for="input-email">{{ $errors->first('email') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                 <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('map') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('map') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('map') ? ' is-invalid' : '' }}" name="map" id="input-map" type="text" placeholder="{{ __('map') }}" value="{{$front->map}}" required="true" aria-required="true"/>
                      @if ($errors->has('map'))
                        <span id="map-error" class="error text-danger" for="input-map">{{ $errors->first('map') }}</span>
                      @endif
                    </div>
                  </div>
                </div>



        {{Form::hidden('_method','PUT')}}
                    <div class="card-footer ml-auto mr-auto">
                        <button type="submit" class="btn btn-primary">{{ __('Update Settings') }}</button>
                    </div>
        {!! Form::close() !!}

            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

@endsection

