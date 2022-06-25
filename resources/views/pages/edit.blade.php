@extends('layout.dashboard')

@section('title', 'Edit Data Buku')

@section('content')
<main class="mt-5 pt-3">
    <section class="content">
      <div class="title-body fw-bold fs-2 text-center text-uppercase ">
        Edit Barang
      </div>
        <hr>
      </div>
      <div class="container">
        <div class="form-box" style="width: 500px;">
          <form action="{{ url('buku/edit/')}}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{ $edit->id }}">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Kode Buku</label>
              <input type="text" class="form-control" name="id_buku" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $edit->id_buku }}">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Judul Buku</label>
              <input type="text" class="form-control" name="judul_buku" id="exampleInputPassword1" value="{{ $edit->judul_buku }}">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Penulis</label>
              <input type="text" class="form-control" name="penulis" id="exampleInputPassword1" value="{{ $edit->penulis }}">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Penerbit</label>
              <input type="text" class="form-control" name="penerbit" id="exampleInputPassword1" value="{{ $edit->penerbit }}">
            </div>
            <a href="{{ url('home') }}" class="btn btn-danger">Kembali</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
        </div>
      </div>
    </section>
  </main>

@endsection