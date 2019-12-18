@extends('layouts.app', ['activePage' => 'jenis_surat', 'titlePage' => __('Jenis Surat')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('jenis_surat.store') }}" autocomplete="off" class="form-horizontal">
            @csrf
            @method('post')

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Tambah Jenis Surat') }}</h4>
                <p class="card-category"></p>
              </div>
              <div class="card-body ">
                <div class="row">
                  <div class="col-md-12 text-right">
                      <a href="{{ route('jenis_surat') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Nama') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('jenis') ? ' has-danger' : '' }}">
                      <input class="form-control" name="jenis" id="jenis" type="text" placeholder="{{ __('Jenis Surat') }}" value="{{ old('jenis') }}" required="true" aria-required="true"/>
                      <!-- @if ($errors->has('name'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                      @endif -->
                    </div>
                  </div>
                </div>

              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Tambah Jenis Surat') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
