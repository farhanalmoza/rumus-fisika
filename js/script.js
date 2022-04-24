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

// Hasil untuk rumus frekuensi
$('#submitFrekuensi').click(function() {
    let getaran = $('#getaran').val();
    let waktu = $('#waktu').val();
    let frekuensi = getaran / waktu;
    $('#hasilFrekuensi').html(`Hasil frekuensinya adalah ${frekuensi} Hz`);
})

// Hasil untuk rumus frekuensi 2
$('#submitFrekuensi2').click(function() {
    let kecepatan = $('#kecepatan').val();
    let panjang = $('#panjang').val();
    let frekuensi2 = kecepatan / panjang;
    $('#hasilFrekuensi2').html(`Hasil frekuensinya adalah ${frekuensi2} Hz`);
})

// Hasil untuk rumus frekuensi 3
$('#submitFrekuensi2').click(function() {
    let satu = $('#satu').val();
    let periode = $('#periode').val();
    let frekuensi3 = 1 / periode;
    $('#hasilFrekuensi3').html(`Hasil frekuensinya adalah ${frekuensi3} Hz`);
})

// Hasil untuk rumus daya
$('#submitDaya').click(function() {
    let energi = $('#energi').val();
    let waktu = $('#waktu').val();
    let daya = energi / waktu;
    $('#hasilDaya').html(`Hasil dayanya adalah ${daya} Watt`);
})

// Hasil untuk rumus usaha
$('#submitUsaha').click(function() {
    let gaya = $('#gaya').val();
    let perpindahan = $('#perpindahan').val();
    let  usaha = gaya * perpindahan;
    $('#hasilUsaha').html(`Hasil usahanya adalah ${usaha} J`);
})

// Hasil untuk rumus cepat rambat gelombang
$('#submitcepatrambatgelombang').click(function() {
    let jarak = $('#jarak').val();
    let waktu = $('#waktu').val();
    let cepatrambatgelombang = jarak / waktu;
    $('#hasilcepatrambatgelombang').html(`Hasil cepat rambat gelombang adalah ${cepatrambatgelombang} m/s`);
})

// Hasil untuk rumus hambatan pengganti seri
$('#submithambatanpenggantiseri').click(function() {
    let R1 = $('#R1').val();
    let R2 = $('#R2').val();
    let R3 = $('#R3').val();
    let hambatanpenggantiseri = R1+R2+R3;
    $('#hasilhambatanpenggantiseri').html(`Hasil hambatan pengganti seri adalah ${hambatanpenggantiseri} ohm`);
})

// Hasil untuk rumus hambatan pengganti pararel
$('#submithambatanpenggantipararel').click(function() {
    let R1 = $('#R1').val();
    let R2 = $('#R2').val();
    let R3 = $('#R3').val();
    let hambatanpenggantipararel = 1/R1+1/R2+1/R3;
    $('#hasilhambatanpenggantipararel').html(`Hasil hambatan pengganti pararel adalah ${hambatanpenggantipararel} ohm`);

})
