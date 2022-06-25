@extends('layout.dashboard')

@section('title', 'Lihat Data Buku')

@section('content')

<main class="mt-5 pt-3">
    <section class="content">
      <div class="title-body fw-bold fs-2 text-center text-uppercase ">
        Data semua barang
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
                        <th>Kode buku</th>
                        <th>Judul Buku</th>
                        <th>Penulis</th>
                        <th>Penerbit</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($hasil as $item)
                    <tr>                     
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->id_buku }}</td>
                        <td>{{ $item->judul_buku }}</td>
                        <td>{{ $item->penulis }}</td>
                        <td>{{ $item->penerbit }}</td>                     
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
<script>
    $(document).ready(function() {
        $('#table_id').DataTable();
    });  
</script>    
@endsection