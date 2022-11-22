@extends('layouts.navbar')

@section('main')
<div class="mb-4">
    <div class="mb-3 d-flex justify-content-between">
        <div class="">
            <a href="{{ route('artikel.create') }}"><button class="btn btn-primary">Tambah</button></a>
        </div>
        <div class="text-center">
            <h3>Artikel</h3>
        </div>
        <div>

        </div>
    </div>
    <table class="table table-hover text-center">
        <thead class="bg-primary text-white">
            <tr>
                <td>Judul</td>
                <td>Tanggal Artikel</td>
                <td>Kategori</td>
                <td>Foto</td>
                <td>Aksi</td>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $d)
            <tr>
                <td>{{ $d->judul }}</td>
                <td>{{ $d->tgl_artikel }}</td>
                <td>{{ $d->kategori->kategori }}</td>
                <td><img src="{{ asset('storage/'.$d->foto) }}" class="rounded-2" width="75px" alt=""></td>
                <td>
                    <a href="{{ route('artikel.show', $d->id) }}"><button class="btn btn-secondary">Lihat</button></a>
                    <a href="{{ route('artikel.edit', $d->id) }}"><button class="btn btn-primary">Edit</button></a>
                    <form action="{{ route('artikel.destroy', $d->id) }}" method="POST" style="display: inline-block">
                        @csrf
                        @method('delete')
                        <a href="#" onclick="return confirm('Yakin hapus Data ?')"> <button class="btn btn-danger">Delete</button> </a>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
