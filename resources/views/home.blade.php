@extends("layout.main")

@section('content')


<main>
    <h2>Selamat Datang di Restoran Kami</h2>
    <p>Temukan makanan dan minuman lezat untuk setiap selera!</p>
    <a href="{{ route('food.index') }}" class="btn btn-secondary">Lihat Menu Makanan</a>
    <a href="{{ route('drink.index') }}" class="btn btn-secondary">Lihat Menu Minuman</a>
    <a href="{{ route('dummy.index') }}" class="btn btn-secondary">Lihat Menu dummy</a>
@endsection
