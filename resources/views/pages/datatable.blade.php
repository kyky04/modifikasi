@extends('layouts.app', ['activePage' => 'datatable', 'titlePage' => __('Table List')])

@section('content')
<div class="content">
  <div class="container-fluid">
      <div class="row">
          <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">DataTables </h4>
                  <p class="card-category"> Here is a subtitle for this table</p>
                </div>
                <div class="row">

                  <!-- <div class="card">
                      <div class="card-content text-center">
                          <h5>A warning message, with a function attached to the "Confirm" Button...</h5>
                          <button class="btn btn-rose btn-fill" onclick="demo.showSwal('warning-message-and-confirmation')">Try me!</button>
                      </div>
                  </div> -->
                </div>
                <div class="col-12 text-right" style="width:100%">
                  <a href="{{ route('user.create') }}" class="btn btn-sm btn-primary">{{ __('Tambah') }}</a>
                </div>
                  <div class="card-content">
                      <div class="toolbar">
                          <!--        Here you can write extra buttons/actions for the toolbar              -->
                      </div>
                      <div class="material-datatables">
                          <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                              <thead>
                                  <tr>
                                      <th>Jenis Surat</th>
                                      <th class="disabled-sorting text-right">Actions</th>
                                  </tr>
                              </thead>
                              <tfoot>
                                  <tr>
                                      <th>Name</th>
                                      <th class="text-right">Actions</th>
                                  </tr>
                              </tfoot>
                              <tbody>
                                @foreach($jenis_surat as $jenis)
                                  <tr>
                                      <td>{{$jenis->jenis}}</td>
                                      <td class="text-right">
                                          <a href="#" class="btn btn-simple btn-info btn-icon like"><i class="material-icons">favorite</i></a>
                                          <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="material-icons">dvr</i></a>
                                          <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="material-icons">close</i></a>
                                      </td>
                                      <!-- <td class="text-right">
                                          <a href="#" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm"><i class="material-icons">favorite</i></a>
                                          <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i class="material-icons">dvr</i></a>
                                          <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i class="material-icons">close</i></a>
                                          <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                            <i class="material-icons">close</i>
                                          </button>
                                      </td> -->
                                  </tr>
                                @endforeach
                              </tbody>
                          </table>
                      </div>
                  </div>
                  <!-- end content-->
              </div>
              <!--  end card  -->
          </div>
          <!-- end col-md-12 -->
      </div>
      <!-- end row -->
  </div>
</div>
@endsection
