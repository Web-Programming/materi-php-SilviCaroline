// Jalankan setelah halaman siap
document.addEventListener("DOMContentLoaded", function () {

  // ✅ Smooth Scroll
  const btnScroll = document.getElementById("btnScroll");
  if (btnScroll) {
    btnScroll.addEventListener("click", function () {
      document.getElementById("tentang").scrollIntoView({
        behavior: "smooth"
      });
    });
  }

  // ✅ Validasi Form
  const form = document.getElementById("formKontak");
  if (form) {
    form.addEventListener("submit", function (e) {
      let nama = document.getElementById("nama").value.trim();
      let email = document.getElementById("email").value.trim();
      let pesan = document.getElementById("pesan").value.trim();

      if (nama === "" || email === "" || pesan === "") {
        alert("Semua field harus diisi!");
        e.preventDefault();
      } else {
        alert("Pesan berhasil dikirim!");
      }
    });
  }

  // ✅ Navbar Active
  const navLinks = document.querySelectorAll(".nav-link");
  navLinks.forEach(link => {
    link.addEventListener("click", function () {
      navLinks.forEach(l => l.classList.remove("active"));
      this.classList.add("active");
    });
  });

  // ✅ Animasi Scroll
  const elements = document.querySelectorAll(".fade-in");

  function tampilSaatScroll() {
    elements.forEach(el => {
      let posisi = el.getBoundingClientRect().top;
      let tinggiLayar = window.innerHeight;

      if (posisi < tinggiLayar - 100) {
        el.style.opacity = "1";
        el.style.transform = "translateY(0)";
      }
    });
  }

  window.addEventListener("scroll", tampilSaatScroll);
  tampilSaatScroll(); // biar langsung jalan saat load

});