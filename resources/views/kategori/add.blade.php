@extends('layouts.navbar')

@section('main')

<form action="{{ route('kategori.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Kategori</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="kategori">
    </div>
    <div class="mb-3">
        <input type="submit" class="btn btn-primary">
    </div>
</form>
@endsection
