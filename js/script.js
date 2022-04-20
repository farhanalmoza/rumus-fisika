// Hasil untuk rumus percepatan
$('#submit').click(function() {
    let kecepatan = $('#kecepatan').val();
    let waktu = $('#waktu').val();
    let percepatan = kecepatan / waktu;
    $('#hasil').html(`Hasil percepatannya adalah ${percepatan} m/s^2`);
})