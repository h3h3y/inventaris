@extends('layout.dashboard')

@section('title', 'Input Data Buku')

@section('content')

<main class="mt-5 pt-3">
    <section class="content">
      <div class="title-body fw-bold fs-2 text-center text-uppercase ">
        Input Barang
      </div>
        <hr>
      </div>
      <div class="container">
        <div class="form-box">
          <form action="{{ url('buku/input') }}" method="post">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Kode Buku</label>
              <input type="text" class="form-control" name="id_buku" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Judul Buku</label>
              <input type="text" class="form-control" name="judul_buku" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Penulis</label>
              <input type="text" class="form-control" name="penulis" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Penerbit</label>
              <input type="text" class="form-control" name="penerbit" id="exampleInputPassword1">
            </div>
            <button type="reset" class="btn btn-warning">Reset</button>
            <button type="submit" class="btn btn-primary">Input</button>
          </form>
        </div>
      </div>
    </section>
  </main>

@endsection