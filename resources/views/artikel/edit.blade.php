@extends('layouts.navbar')

@section('main')

<form action="{{ route('artikel.update', $data->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Judul</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="judul" value="{{ $data->judul }}">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Isi</label>
        {{-- <input type="text" class="form-control" id="exampleFormControlInput1" name="isi" value="{{ $data->isi }}"> --}}
        <textarea name="isi" id="" class="form-control" cols="30" rows="10">{{ $data->isi }}</textarea>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Tanggal artikel</label>
        <input type="date" class="form-control" id="exampleFormControlInput1" name="tgl_artikel" value="{{ $data->tgl_artikel }}">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Foto</label>
        <input type="file" class="form-control" id="exampleFormControlInput1" name="foto">
    </div>
    <div class="mb-3 d-flex flex-column">
        <label for="exampleFormControlTextarea1" class="form-label">Foto sebelumnya</label>
        <img src="{{ asset('storage/'.$data->foto) }}" width="75px" class="rounded-3" alt="">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Kategori</label>
        <select class="form-select" aria-label="Default select example" name="kategori_id">
            <option disabled selected value="">-- Pilih Kategori --</option>
            @foreach($kategori as $k)
            <option value="{{ $k->id }}" {{ $k->id == $data->kategori_id? 'selected' : ''}}>{{$k->kategori}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <input type="submit" class="btn btn-primary">
    </div>
</form>
@endsection
