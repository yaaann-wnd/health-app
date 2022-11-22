@extends('layouts.navbar')

@section('main')
<div class="mb-4">
    <div class="mb-3 d-flex justify-content-between">
        <div class="">
            <a href="{{ route('ujk.create') }}"><button class="btn btn-primary">Tambah</button></a>
        </div>
        <div class="text-center">
            <h3>Peserta UJK</h3>
        </div>
        <div>

        </div>
    </div>
    <table class="table table-hover text-center">
        <thead class="bg-primary text-white">
            <tr>
                <td>Nama</td>
                <td>Hobi</td>
                <td>Umur</td>
                <td>Aksi</td>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $d)
            <tr>
                <td>{{ $d->nama }}</td>
                <td>{{ $d->hobi }}</td>
                <td>{{ $d->umur }}</td>
                <td>
                    <a href="{{ route('ujk.show', $d->id) }}"><button class="btn btn-secondary">Lihat</button></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>    
@endsection