@extends("layout.main")

@section('content')
  <h1>Detail Food</h1>

  <div class="container">
    <div class="mb-3">
      <label for="nama" class="form-label">Nama</label>
      <input type="text" class="form-control" id="nama" value="{{ $food->nama }}" disabled>
    </div>
    <div class="mb-3">
      <label for="deskripsi" class="form-label">Deskripsi</label>
      <input type="text" class="form-control" id="deskripsi" value="{{ $food->deskripsi }}" disabled>
    </div>
    <div class="mb-3">
      <label for="harga" class="form-label">Harga</label>
      <input type="text" class="form-control" id="harga" value="{{ $food->harga }}" disabled>
    </div>

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="{{ route('food.index') }}" class="btn btn-secondary">Back</a>
    </div>
  </div>
  <br> <br>
@endsection
