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