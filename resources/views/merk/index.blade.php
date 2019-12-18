@extends('layouts.app', ['activePage' => 'merk', 'titlePage' => __('Merk Mobil')])

@section('content')
<div class="content">
  <div class="container-fluid">
      <div class="row">
          <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Merk Mobil </h4>
                  <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
                </div>
                <div class="col-12 text-right" style="width:100%">
                  <a href="{{ route('jenis_surat.create') }}" class="btn btn-sm btn-primary">{{ __('Tambah') }}</a>
                </div>
                  <div class="card-content">
                      <div class="toolbar">
                          <!--        Here you can write extra buttons/actions for the toolbar              -->
                      </div>
                      <div class="material-datatables">
                          <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                              <thead>
                                  <tr>
                                      <th>Merk Mobil</th>
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
                                @foreach($items as $item)
                                  <tr>
                                      <td>{{$item->name}}</td>
                                      <td class="td-actions text-right">
                                        <form action="#" method="post">
                                            @csrf
                                            @method('delete')

                                            <a rel="tooltip" class="btn btn-success btn-link" href="{{ route('jenis_surat.edit', $item) }}" data-original-title="" title="">
                                              <i class="material-icons">edit</i>
                                              <div class="ripple-container"></div>
                                            </a>
                                            <!-- <button type="button" class="btn btn-danger btn-link" data-original-title="" title="" onclick="confirm('{{ __("Are you sure you want to delete this user?") }}') ? this.parentElement.submit() : ''">
                                                <i class="material-icons">close</i>
                                                <div class="ripple-container"></div>
                                            </button> -->
                                            <button type="button" class="btn btn-danger btn-link" data-original-title="" title="" onclick="remove({{$item->id}});">
                                                <i class="material-icons">close</i>
                                                <div class="ripple-container"></div>
                                            </button>
                                        </form>
                                      </td>

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
@section('js')
<script type="text/javascript">
function remove(id){
  Swal.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
    if (result.value) {
      window.location.replace('{{ url("jenis_surat/delete") }}/'+id);
    }
  })
}
$(document).ready(function(){
  {!! Session::get('notification') !!}
});
</script>
@endsection
