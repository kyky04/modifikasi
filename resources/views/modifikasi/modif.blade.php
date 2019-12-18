@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'login', 'title' => __('LOGIN')])

@section('content')
<div class="container" style="height: auto;">
  <div class="row">
    <div class="col-md-9 ml-auto mr-auto text-center">
      <h3>{{ __('Silahkan isi untuk mendapatkan rekomendasi modifkasi mobil anda') }} </h3>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-8 ml-auto mr-auto">
      <form class="form" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="card card-login card-hidden mb-3">
          <div class="card-header card-header-primary text-center">
            <h4 class="card-title"><strong>{{ __('Modifikasi') }}</strong></h4>
            <div class="social-line">
              <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                <i class="fa fa-facebook-square"></i>
              </a>
              <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                <i class="fa fa-twitter"></i>
              </a>
              <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                <i class="fa fa-google-plus"></i>
              </a>
            </div>
          </div>
          <div class="card-body">
            <div class="bmd-form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
              <div class="input-group">
                    <label class="col-sm-4 label-on-left">Pilih Mobil</label>
                    <div class="col-sm-12">
                      <select class="form-control" id="sel1">
                        <option>Suzuki Grand Vitara.</option>
                        <option>Toyota Fortuner</option>
                        <option>Mitsubishi Pajero</option>
                        <option>Honda CR-V</option>
                      </select>
                    </div>
              </div>
            </div>

            <div class="bmd-form-group{{ $errors->has('password') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    Tahun
                  </span>
                </div>
                <input type="number" name="password" id="password" class="form-control" placeholder="{{ __('Tahun...') }}" value="{{ !$errors->has('password') ? "secret" : "" }}" required>
              </div>
            </div>
            <div class="form-check mr-auto ml-3 mt-3">
              <span class="input-group-text">
                Pilih yang ingin anda modifikasi
              </span>
              <label class="form-check-label col-sm-2">
                <input class="form-check-input" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Ban') }}
                <span class="form-check-sign">
                  <span class="check"></span>
                </span>
              </label>
              <label class="form-check-label col-sm-2">
                <input class="form-check-input" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Velg') }}
                <span class="form-check-sign">
                  <span class="check"></span>
                </span>
              </label>
            </div>
            <div class="bmd-form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
              <div class="input-group">
                    <label class="col-sm-4 label-on-left">Pilih Kualitas</label>
                    <div class="col-sm-12">
                      <select class="form-control" id="sel1">
                        <option>Low</option>
                        <option>Medium</option>
                        <option>High</option>
                      </select>
                    </div>
              </div>
            </div>

            <div class="bmd-form-group{{ $errors->has('password') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    Uangmu
                  </span>
                </div>
                <input type="number" name="password" id="password" class="form-control" placeholder="{{ __('Uangmu...') }}" value="{{ !$errors->has('password') ? "secret" : "" }}" required>
              </div>
            </div>
          </div>
          <div class="card-footer justify-content-center">
            <button type="submit" class="btn btn-primary btn-link btn-lg">{{ __('Lets Go') }}</button>
          </div>
        </div>
      </form>
      <!-- <div class="row">
        <div class="col-6">
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="text-light">
                    <small>{{ __('Forgot password?') }}</small>
                </a>
            @endif
        </div>
        <div class="col-6 text-right">
            <a href="{{ route('register') }}" class="text-light">
                <small>{{ __('Create new account') }}</small>
            </a>
        </div> -->
      </div>
    </div>
  </div>
</div>
@endsection
