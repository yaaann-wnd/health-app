@extends('layouts.navbar')

@section('main')

<form action="{{ route('artikel.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Judul</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="judul">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Foto</label>
        <input type="file" class="form-control" id="exampleFormControlInput1" name="foto">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Isi</label>
        <textarea name="isi" id="" cols="30" class="form-control" rows="10"></textarea>
        {{-- <input type="text" class="form-control" id="exampleFormControlInput1" name="isi"> --}}
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Tanggal artikel</label>
        <input type="date" class="form-control" id="exampleFormControlInput1" name="tgl_artikel">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Kategori</label>
        <select class="form-select" aria-label="Default select example" name="kategori_id">
            <option selected disabled value="">-- Pilih Kategori --</option>
            @foreach($data as $k)
            <option value="{{ $k->id }}">{{ $k->kategori }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <input type="submit" class="btn btn-primary">
    </div>
</form>
@endsection
