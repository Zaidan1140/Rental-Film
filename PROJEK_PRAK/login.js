// JavaScript untuk mengelola pop-up konfirmasi
const form = document.getElementById('login-form');
const popup = document.getElementById('confirmation-popup');
const confirmBtn = document.getElementById('confirm-btn');
const cancelBtn = document.getElementById('cancel-btn');

form.addEventListener('submit', function(event) {
    event.preventDefault(); // Mencegah pengiriman form
    popup.style.display = 'flex'; // Tampilkan pop-up
});

confirmBtn.addEventListener('click', function() {
    // Jika pengguna menekan 'Ya', kirimkan form
    form.submit();
});

cancelBtn.addEventListener('click', function() {
    // Jika pengguna menekan 'Tidak', sembunyikan pop-up
    popup.style.display = 'none';
});
