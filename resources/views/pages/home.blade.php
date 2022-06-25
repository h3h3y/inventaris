@extends('layout.dashboard')

@section('title', 'Dashboard')


@section('content')
<!-- index content -->
<main class="mt-5 pt-3">
    <section class="content">
      <div class="title-body fw-bold fs-2 text-center text-uppercase ">
        Halaman Dashboard
      </div>
      <div class="my-4 line-title">
        <hr>
      </div>
      <div class="content-body">
        <!-- card content -->
        <div class="container">
          <div class="row gx-4 top-content text-white">
            <div class="col-lg-3">
             <div class="p-3 border bg-primary">
              <h5 class="card-title fw-bold fs-5">Data Masuk Hari Ini</h5>
              <div class="row py-3">
                <div class="col lg-6 col-sm-6">
                  <i class="fa-solid fa-indent" style="height: 50px;"></i> 
                </div>
                <div class="col lg-6 col-sm-6 text-center">
                  <p>15 Item</p>
                </div>
              </div>
              
             </div>
            </div>
            <div class="col-lg-3">
              <div class="p-3 border bg-danger">
                <h5 class="card-title fw-bold fs-5">Data Keluar Hari Ini</h5>
              <div class="row py-3">
                <div class="col lg-6 col-sm-6">
                  <i class="fa-solid fa-outdent" style="height: 50px;"></i>
                </div>
                <div class="col lg-6 col-sm-6 text-center">
                  <p>7 Item</p>
                </div>
              </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="p-3 border bg-success">
                <h5 class="card-title fw-bold fs-5">Buku Paling Banyak</h5>
              <div class="row py-3">
                <div class="col lg-6 col-sm-6">
                  <i class="fa-solid fa-plus" style="height: 50px;"></i>
                </div>
                <div class="col lg-6 col-sm-6 text-center">
                  <p>	Larry the Bird</p>
                </div>
              </div>
              </div>
             </div>
             <div class="col-lg-3">
               <div class="p-3 border bg-warning">
                <h5 class="card-title fw-bold fs-5">Buku Paling Sedikit</h5>
              <div class="row py-3">
                <div class="col lg-6 col-sm-6">
                  <i class="fa-solid fa-minus" style="height: 50px;"></i>
                </div>
                <div class="col lg-6 col-sm-6 text-center">
                  <p>Mark</p>
                </div>
              </div>
               </div>
             </div>
          </div>
        </div>
        <!-- card content -->
        <!-- table content -->
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-sm-12 pt-5 pb-5">
              <table id="table_id" class="display table table-stripped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode buku</th>
                        <th>Judul Buku</th>
                        <th>Penulis</th>
                        <th>Penerbit</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($db_index as $item)
                    <tr>                     
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->id_buku }}</td>
                        <td>{{ $item->judul_buku }}</td>
                        <td>{{ $item->penulis }}</td>
                        <td>{{ $item->penerbit }}</td>
                        <td>
                          <a href="{{ url('edit') .'/' . $item->id }}"><i class="fa-solid fa-pen-to-square"></i></a>
                          <a href="{{ url('buku/delete') . '/' . $item->id }}"><i class="fa-solid fa-trash-can"></i></a>
                        </td>                     
                    </tr>
                  @endforeach
                </tbody>
            </table>
            </div>
          </div>
        </div>
        <!-- table content -->
      </div>
    </section>
  </main>
  <!-- index content -->
  @section('js')
  <script>
    $(document).ready(function() {
        $('#table_id').DataTable();
    });  
</script>
  @if(Session::has('confirm-delete'))
    <script>
      const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
          confirmButton: 'btn btn-success',
          cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
      })

      swalWithBootstrapButtons.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, cancel!',
        reverseButtons: true
      }).then((result) => {
        if (result.isConfirmed) {
          swalWithBootstrapButtons.fire(
            'Deleted!',
            'Your file has been deleted.',
            'success'
          )
        } else if (
          /* Read more about handling dismissals below */
          result.dismiss === Swal.DismissReason.cancel
        ) {
          swalWithBootstrapButtons.fire(
            'Cancelled',
            'Your imaginary file is safe :)',
            'error'
          )
        }
      })
    </script>
  @endif
  @endsection
@endsection

  