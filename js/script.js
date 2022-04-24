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

// Hasil untuk rumus cepat rambat gelombang
$('#submitcepatrambatgelombang').click(function() {
    let jarak = $('#jarak').val();
    let waktu = $('#waktu').val();
    let cepatrambatgelombang = jarak / waktu;
    $('#hasilcepatrambatgelombang').html(`Hasil cepat rambat gelombang adalah ${cepatrambatgelombang} m/s`);
})