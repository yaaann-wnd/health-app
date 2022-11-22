<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIK Health</title>
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark mb-4 shadow">
        <div class="container">
            <a class="navbar-brand" href="#">TIK Health</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('artikel*') || request()->is('home')? 'active':''}}" aria-current="page" href="{{ route('artikel.index') }}">Artikel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('kategori*')? 'active':''}}" href="{{ route('kategori.index') }}">Kategori</a>
                    </li>
                    @if(Auth::user()->role == 'admin')
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('user*')? 'active':''}}" href="{{ route('user.index') }}">User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('ujk*')? 'active':''}}" href="{{ route('ujk.index') }}">Daftar UJK</a>
                    </li>
                    @endif
                </ul>
                <div class="navbar-nav ms-auto">
                    <div class="my-auto mx-4">
                        <span class="text-uppercase fw-semibold text-white"><i class="bi-person me-1"></i>{{ Auth::user()->name }}</span>
                    </div>

                    <a href="{{ route('logout') }}" class="btn btn-danger" onclick="
                    event.preventDefault();
                    document.getElementById('logout-form').submit();
                    ">Logout</a>
                    <form action="{{ route('logout') }}" id="logout-form" method="post">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('main')
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    {{-- <script src="{{ asset('main.js') }}"></script> --}}
    <script>
        class umur {
            constructor(tahun) {
                this.tahunLahir = tahun;
            }

            hitungUmur() {
                return 2022 - this.tahunLahir;
            }
        }

        class konsultasi extends umur {
            constructor(tahun, bmi) {
                super(tahun);
                this.bmi = bmi;
            }

            hitung() {
                if (this.hitungUmur() > 30) {
                    return 'Mature'
                } else if (this.hitungUmur() > 17) {
                    return 'Dewasa'
                } else {
                    return 'Belum Dewasa'
                }
            }

            konsul() {
                if (this.hitung() == 'Mature' && this.bmi == 'Obesitas') {
                    return 'Anda bisa mendapatkan Obat Gratis';
                } else if (this.hitung() == 'Dewasa' && this.bmi == 'Obesitas') {
                    return 'Anda bisa mendapatkan Konsultasi Gratis';
                } else {
                    return 'Anda tidak bisa mendapatkan Konsultasi Gratis';
                }
            }
        }

        function BMI() {
            let tb = document.getElementById('floatingInput2 tb').value / 100;
            let bb = document.getElementById('floatingInput3 bb').value;

            let BMI = bb / (tb * tb);
            BMI = BMI.toFixed(2);

            document.getElementById('output7').innerHTML = BMI;
            let status = '';

            if (BMI < 18.5) {
                status = "Kurus"
                document.getElementById('output5').innerHTML = status;
                // console.log('kurus')
            } else if (BMI <= 22.9) {
                status = "Normal"
                document.getElementById('output5').innerHTML = status;
            } else if (BMI <= 29.9) {
                status = "Gendut"
                document.getElementById('output5').innerHTML = status;
            } else if (BMI > 30) {
                status = "Obesitas"
                document.getElementById('output5').innerHTML = status;
            }

            let umurku = new umur(document.getElementById('lahir').value);
            document.getElementById('output2').innerHTML = umurku.hitungUmur();

            let konsultasiku = new konsultasi(document.getElementById('lahir').value, status);
            document.getElementById('output8').innerHTML = konsultasiku.konsul();

            let nama = document.getElementById('floatingInput').value
            document.getElementById('output1').innerHTML = nama

            document.getElementById('output4').innerHTML = bb

            let tinggi = document.getElementById('floatingInput2 tb').value
            document.getElementById('output3').innerHTML = tinggi

            let hobi = document.getElementById('hobi').value
            document.getElementById('output6').innerHTML = hobi


        }

        // function gatau(tahunlahir = document.getElementById("lahir").value) {

        //     let tahun = 2022
        //     let bb = document.getElementById("floatingInput3 bb").value
        //     let tb = document.getElementById("floatingInput2 tb").value
        //     let stats
        //     let hitung = parseInt(bb) / Math.pow(parseFloat(tb), 2)

        //     hitung = hitung.toFixed(2)

        //     document.getElementById("bmi").value = hitung

        //     stats = document.getElementById("bmi").value

        //     document.getElementById("hasil").value = tahun - tahunlahir

        //     if (stats <= 18.5) {
        //         document.getElementById("stats").value = "Kurus"
        //     } else if (stats <= 22.9) {
        //         document.getElementById("stats").value = "Normal"
        //     } else if (stats <= 29.9) {
        //         document.getElementById("stats").value = "Gemuk "
        //     } else {
        //         document.getElementById("stats").value = "Obesitas"
        //     }

        //     //umur
        //     let umur = document.getElementById("hasil").value

        //     //status
        //     let status = document.getElementById("stats").value

        //     if (umur >= 17 && status == "Obesitas") {
        //         //field konsultasi
        //         document.getElementById("kons").value = "Dewasa - Anda bisa mendapatkan konsultasi gratis"
        //     } else if (umur > 30 && status == "Obesitas"){

        //         document.getElementById("kons").value = "Dewasa - Anda mendapatkan obat gratis"
        //     } else if (umur >= 17) {
        //         //field konsultasi
        //         document.getElementById("kons").value = "Dewasa - Tidak mendapatkan konsultasi gratis"
        //     } else {
        //         //field konsultasi
        //         document.getElementById("kons").value = "Belum dewasa - Tidak mendapatkan konsultasi gratis"

        //     }
        // }

        function lihat() {
            let x = document.getElementById("passwordd");
            let y = document.getElementById("cpasswordd");
            if (x.type == "password" && y.type == "password") {
                x.type = "text";
                y.type = "text";
            } else {
                x.type = "password";
                y.type = "password";
            }
        }

        function check() {
            if (document.getElementById('passwordd').value == document.getElementById('cpasswordd').value) {
                document.getElementById('pesan').style.color = 'green';
                document.getElementById('pesan').innerHTML = 'Password sama';
            } else {
                document.getElementById('pesan').style.color = 'red';
                document.getElementById('pesan').innerHTML = 'Password tidak sama';
                document.getElementById('pesan').class = 'invalid';
            }
        }

    </script>
</body>
</html>
