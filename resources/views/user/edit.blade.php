@extends('layouts.navbar')

@section('main')

<form action="{{ route('user.update', $data->id) }}" method="POST">
    @csrf
    @method('put')
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Username</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="name" value="{{ $data->name }}">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Email</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" name="email" value="{{ $data->email }}">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Role</label>
        {{-- <input type="text" class="form-control" id="exampleFormControlInput1" name="role" value="{{ $data->role }}"> --}}
        <select class="form-select" name="role" id="">
            <option class="text-capitalize" value="{{ $data->role }}">{{ $data->role }}</option>
            @if ($data->role == 'editor')
            <option value="admin">Admin</option>
            @else
            <option value="editor">Editor</option>
            @endif
        </select>
    </div>
    <div class="mb-3">
        <input type="submit" class="btn btn-primary" value="Submit">
    </div>
</form>
@endsection
