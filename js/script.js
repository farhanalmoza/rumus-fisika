// sidebar
window.addEventListener('DOMContentLoaded', event => {
    // Toggle the side navigation
    const sidebarToggle = $('#sidebarToggle');
    if (sidebarToggle) {
        // Uncomment Below to persist sidebar toggle between refreshes
        // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
        //     document.body.classList.toggle('sb-sidenav-toggled');
        // }
        sidebarToggle.addEventListener('click', event => {
            event.preventDefault();
            document.body.classList.toggle('sb-sidenav-toggled');
            localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
        });
    }
});

// Hasil untuk rumus percepatan
$('#submitPercepatan').click(function() {
    let kecepatan = $('#kecepatan').val();
    let waktu = $('#waktu').val();
    let percepatan = kecepatan / waktu;
    $('#hasilPercepatan').html(`Hasil percepatannya adalah ${percepatan} m/s^2`);
})

// Hasil untuk rumus massa jenis
$('#submitMassaJenis').click(function() {
    let massa = $('#massa').val();
    let volume = $('#volume').val();
    let massaJenis = massa / volume;
    $('#hasilMassaJenis').html(`Hasil massa jenisnya adalah ${massaJenis} kg/m^3`);
})

// Hasil untuk rumus gaya
$('#submitGaya').click(function() {
    let massa = $('#massa').val();
    let percepatan = $('#percepatan').val();
    let gaya = percepatan * massa;
    $('#hasilGaya').html(`Hasil gayanya adalah ${gaya} N`);
})

// Hasil untuk rumus energi potensial
$('#submitEnergiPotensial').click(function() {
    let massa = $('#massa').val();
    let gravitasi = $('#gravitasi').val();
    let ketinggian = $('#ketinggian').val();
    let energiPotensial = massa * gravitasi * ketinggian;
    $('#hasilEnergiPotensial').html(`Hasil energi potensialnya adalah ${energiPotensial} J`);
})

// Hasil untuk rumus panjang gelombang
$('#submitPanjangGelombang').click(function() {
    let frekuensi = $('#frekuensi').val();
    let cepatRambatGelombang = $('#cepatRambatGelombang').val();
    let panjangGelombang = cepatRambatGelombang / frekuensi;
    $('#hasilPanjangGelombang').html(`Hasil panjang gelombangnya adalah ${panjangGelombang} m`);
})

// Hasil untuk rumus energi kinetik
$('#submitEnergiKinetik').click(function() {
    let massa = $('#massa').val();
    let kecepatan = $('#kecepatan').val();
    let energiKinetik = 0.5 * massa * kecepatan * kecepatan;
    $('#hasilEnergiKinetik').html(`Hasil energi kinetiknya adalah ${energiKinetik} J`);
})

// Hasil untuk rumus rangkaian listrik ohm
$('#submitrangkaianlistrikohm').click(function() {
    let kuatarus = $('#kuatarus').val();
    let hambatan = $('#hambatan').val();
    let rangkaianlistrikohm  = kuatarus * hambatan;
    $('#hasilrangkaianlistrikohm').html(`Hasil rangkaian listriknya adalah ${rangkaianlistrikohm} V`);
})

// Hasil untuk rumus periode1
$('#submitPeriode1').click(function() {
    let waktu = $('#waktu').val();
    let getaran = $('#getaran').val();
    let Periode1  = waktu / getaran;
    $('#hasilPeriode1').html(`Hasil Periode1 adalah ${Periode1} S`);
})

// Hasil untuk rumus periode2
$('#submitPeriode1').click(function() {
    let frekuensi = $('#getaran').val();
    let Periode2  = 1 / frekuensi;
    $('#hasilPeriode2').html(`Hasil Periode2 adalah ${Periode2} S`);
})

// Hasil untuk rumus periode3
$('#submitPeriode3').click(function() {
    let kecepatangelombang = $('#kecepatangelombang').val();
    let panjanggelombang = $('#panjanggelombang').val();
    let Periode3  = kecepatangelombang * panjanggelombang;
    $('#hasilPeriode3').html(`Hasil Periode3 adalah ${Periode3} S`);
})
