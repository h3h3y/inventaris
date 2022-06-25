@extends('layout.dashboard')
@section('title', 'Lihat Data Buku')

@section('content')

<main class="mt-5 pt-3">
    <section class="content">
      <div class="title-body fw-bold fs-2 text-center text-uppercase ">
        Data Pengunjung
      </div>
      <div class="my-4 line-title">
        <hr>
      </div>
      <div class="content-body">
        <!-- table content -->
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-sm-12 pt-2">
              <table id="table_id" class="display table table-stripped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama User</th>
                        <th>Tanggal Berkungjung</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($pengunjung as $p)
                    <tr>                     
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $p->user->name }}</td>
                        <td>{{ $p->created_at }}</td>                     
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
@endsection


@section('js')

@if(Session::has('info'))
    <script>
    Swal.fire({
        icon: 'success',
        title: 'Sukses',
        text: 'Data berhasil ditambahkan',
    })
    </script>
@endif

<script>
    $(document).ready(function() {
        $('#table_id').DataTable();
    });  
</script>    
@endsection