
@extends('layouts.navbar')

@section('main')
<div class="mb-4 text-center">
    <div class="mb-3 d-flex justify-content-between">
        <div class="">
            <a href="{{ route('user.create') }}"><button class="btn btn-primary">Tambah</button></a>
        </div>
        <div class="text-center">
            <h3>User</h3>
        </div>
        <div>

        </div>
</div>
<table class="table table-hover text-center">
    <thead class="bg-primary text-white" >
        <tr>
            <td>ID</td>
            <td>Username</td>
            <td>Email</td>
            <td>Role</td>
            <td>Aksi</td>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $d)
        <tr>
            <td>{{ $d->id }}</td>
            <td>{{ $d->name }}</td>
            <td>{{ $d->email }}</td>
            <td>{{ $d->role }}</td>
            <td>
                <a href="{{ route('user.edit', $d->id) }}"><button class="btn btn-primary">Edit</button></a>
                <form action="{{ route('user.destroy', $d->id) }}" method="POST" style="display: inline-block">
                    @csrf
                    @method('delete')
                    <a href="#" onclick="return confirm('Yakin hapus Data ?')"> <button class="btn btn-danger">Delete</button> </a>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
