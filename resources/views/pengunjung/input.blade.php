@extends('layout.dashboard')

@section('title', 'Input Data Pengunjung')

@section('content')

<main class="mt-5 pt-3">
    <section class="content">
      <div class="title-body fw-bold fs-2 text-center text-uppercase ">
        Input Pengunjung
      </div>
        <hr>
      </div>
      <div class="container">
        <div class="form-box" style="width: 300px;">
          <form action="{{ url('pengunjung/input') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="user_id" class="form-label">User</label>
                <select name="user_id" id="user_id" class="form-select">
                    @foreach($user as $usr)
                    <option value="{{ $usr->id }}">{{ $usr->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="reset" class="btn btn-warning">Reset</button>
            <button type="submit" class="btn btn-primary">Input</button>
          </form>
        </div>
      </div>
    </section>
  </main>

@endsection