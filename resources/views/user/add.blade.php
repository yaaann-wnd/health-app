@extends('layouts.navbar')

@section('main')

<form action="{{ route('user.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Username</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="name">
        @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Email</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="email">
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Role</label>
        <input type="text" class="form-control text-uppercase" readonly value="editor" id="exampleFormControlInput1" name="role">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Password</label>
        <input type="password" class="form-control" id="passwordd" name="password" onkeyup="check()">
        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Konfirmasi Password</label>
        <input type="password" class="form-control" id="cpasswordd" onkeyup="check()">
    </div>
    <div class="mb-3">
        <span id="pesan" class="fw-semibold"></span>
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1" onclick="lihat()">
        <label class="form-check-label" for="exampleCheck1">Lihat Password</label>
    </div>
    <div class="mb-3">
        <input type="submit" class="btn btn-primary">
    </div>
</form>
@endsection
