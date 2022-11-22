@extends('layouts.navbar')

@section('main')
    
<form action="{{ route('kategori.update', $data->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">ID Kategori</label>
        <input type="text" class="form-control" readonly id="exampleFormControlInput1" name="id" value="{{ $data->id }}">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Kategori</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="kategori" value="{{ $data->kategori }}">
    </div>
    <div class="mb-3">
        <input type="submit" class="btn btn-primary" value="Submit">
    </div>
</form>
@endsection
