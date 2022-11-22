function gatau(tahunlahir = document.getElementById("lahir").value) {

    let tahun = 2022
    let bb = document.getElementById("floatingInput3 bb").value
    let tb = document.getElementById("floatingInput2 tb").value
    let stats
    let hitung = parseInt(bb) / Math.pow(parseFloat(tb), 2)

    hitung = hitung.toFixed(2)

    document.getElementById("bmi").value = hitung

    stats = document.getElementById("bmi").value

    document.getElementById("hasil").value = tahun - tahunlahir

    if (stats <= 18.5) {
        document.getElementById("stats").value = "Kurus"
    } else if (stats <= 22.9) {
        document.getElementById("stats").value = "Normal"
    } else if (stats <= 29.9) {
        document.getElementById("stats").value = "Gemuk "
    } else {
        document.getElementById("stats").value = "Obesitas"
    }

    //umur
    let umur = document.getElementById("hasil").value

    //status
    let status = document.getElementById("stats").value

    if (umur >= 17 && status == "Obesitas") {
        //field konsultasi
        document.getElementById("kons").value = "Dewasa - Anda bisa mendapatkan konsultasi gratis"
    } else if (umur >= 17) {
        //field konsultasi
        document.getElementById("kons").value = "Dewasa - Tidak mendapatkan konsultasi gratis"
    } else {
        //field konsultasi
        document.getElementById("kons").value = "Belum dewasa - Tidak anjing"

    }
}