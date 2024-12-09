// Event listener untuk memastikan halaman sudah dimuat sebelum script dijalankan
document.addEventListener("DOMContentLoaded", function () {
    // Menambahkan event listener untuk tautan navigasi
    const navLinks = document.querySelectorAll("nav ul li");

    // navLinks.forEach(link => {
    //     link.addEventListener("click", function (event) {
    //         event.preventDefault(); // Mencegah halaman reload saat klik
    //         alert(`You clicked on ${this.textContent}!`);
    //     });
    // });

    // Menambahkan event hover pada gambar di rekomendasi film
    const movieImages = document.querySelectorAll(".movie img");

    movieImages.forEach(image => {
        image.addEventListener("mouseover", function () {
            this.style.borderColor = "#e4b859"; // Mengubah warna border saat hover
            this.style.transition = "border-color 0.3s";
        });

        image.addEventListener("mouseout", function () {
            this.style.borderColor = "#ccc"; // Kembali ke warna awal saat mouseout
        });
    });
});
