@extends('layouts.navbar')

@section('main')

<div class="mb-4">
    <div class="card">
        <div class="card-header">
            Detail Peserta UJK
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-4">
                    <div class="mb-3">
                        Nama
                    </div>
                    <div class="mb-3">
                        Tinggi badan
                    </div>
                    <div class="mb-3">
                        Berat badan
                    </div>
                    <div class="mb-3">
                        BMI
                    </div>
                    <div class="mb-3">
                        Status Berat Badan
                    </div>
                    <div class="mb-3">
                        Hobi
                    </div>
                    <div class="mb-3">
                        Umur
                    </div>
                    <div class="mb-3">
                        Konsultasi
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        {{ $d->nama }}
                    </div>
                    <div class="mb-3">
                        {{ $d->tinggi_badan }}
                    </div>
                    <div class="mb-3">
                        {{ $d->berat_badan }}
                    </div>
                    <div class="mb-3">
                        {{ $d->bmi }}
                    </div>
                    <div class="mb-3">
                        {{ $d->status_bb }}
                    </div>
                    <div class="mb-3">
                        {{ $d->hobi }}
                    </div>
                    <div class="mb-3">
                        {{ $d->umur }}
                    </div>
                    <div class="mb-3">
                        {{ $d->konsultasi }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection