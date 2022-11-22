@extends('layouts.navbar')

@section('main')

<div class="container-fluid mx-auto pt-4">
    <h2 class="text-center">Daftar peserta UJK</h2>
    <div class="row mt-4 d-flex justify-content-center">
        <div class="col-4 mb-3">
            <div class="card p-3">
                <form action="{{ route('ujk.store') }}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="floatingInput">Nama</label>
                        <input type="text" class="form-control mb-3" name="nama" id="floatingInput">
                    </div>
                    <div class="form-group mb-3">
                        <label for="floatingInput6">Tahun lahir</label>
                        <input type="number" class="form-control" name="umur" id="lahir">
                    </div>
                    <div class="form-group mb-3">
                        <label for="floatingInput2">Tinggi Badan ( <i>dalam Meter</i> )</label>
                        <input type="number" step="0.1" class="form-control" name="tinggi_badan" id="floatingInput2 tb">
                    </div>
                    <div class="form-group mb-3">
                        <label for="floatingInput3">Berat Badan ( <i>dalam Kg</i> )</label>
                        <input type="number" class="form-control" name="berat_badan" id="floatingInput3 bb">
                    </div>
                    <div class="form-group mb-3">
                        <label class="mb-2">Hobi</label>
                        <input type="text" class="form-control" name="hobi" id="hobi">
                    </div>
                    <div class="mx-auto text-center mt-3">
                        <input type="submit" class="btn btn-primary me-2" value="Simvan">
                        <input type="button" onclick="BMI()" class="btn btn-primary me-2" value="Preview">
                        <input type="reset" class="btn btn-danger ms-2" value="Reset">
                    </div>
                </form>
            </div>
        </div>
        <div class="col-4 ms-1">
            <div class="card p-3">
                <div class="mb-3">
                    <span class="text-capitalize">Nama : <span id="output1" class="fw-semibold"></span></span>
                </div>
                <div class="mb-3">
                    <span class="text-capitalize">Umur : <span id="output2" class="fw-semibold"></span></span>
                </div>
                <div class="mb-3">
                    <span class="text-capitalize">Tinggi badan : <span id="output3" class="fw-semibold"></span></span>
                </div>
                <div class="mb-3">
                    <span class="text-capitalize">Berat badan : <span id="output4" class="fw-semibold"></span></span>
                </div>
                <div class="mb-3">
                    <span class="text-capitalize">Status Berat badan : <span id="output5" class="fw-semibold"></span></span>
                </div>
                <div class="mb-3">
                    <span class="text-capitalize">Hobi : <span id="output6" class="fw-semibold"></span></span>
                </div>
                <div class="mb-3">
                    <span class="text-capitalize">BMI : <span id="output7" class="fw-semibold"></span></span>
                </div>
                <div class="mb-3">
                    <span class="text-capitalize">Konsultasi : <span id="output8" class="fw-semibold"></span></span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
