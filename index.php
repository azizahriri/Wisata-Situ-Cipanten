<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Majalengka Explore</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
    <button class="hamburger" onclick="toggleMenu()">&#9776;</button>
        <div class="logo">Cipanten Explore</div>
        <nav>
            <ul>
                <li><a href="beranda">Beranda</a></li>
                <li><a href="#wisata">Wisata</a></li>
                <li><a href="#lokasi">Lokasi</a></li>
                <li><a href="detailpesanan.php">Detail</a></li>
            </ul>
        </nav>
    </header>
    
    <section class="hero">
        <div class="overlay"></div>
        <div class="hero-content">
            <h1>WISATA ALAM Cipanten</h1>
            <p>Nikmati keindahan alam yang menakjubkan di Wisata Alam Majalengka</p>
            <button class="cta-button">JELAJAHI</button>
        </div>
    </section>
    
<!--tentang cipanten -->
<main>
    <section class="about">
      <div class="image-container">
        <img src="3.jpg" alt="Pemandangan Majalengka">
      </div>
      <div class="text-container">
        <h2>Majalengka Explore</h2>
        <p>Majalengka adalah sebuah kabupaten di Provinsi Jawa Barat, Indonesia. Kabupaten Majalengka terletak sekitar 200 km sebelah timur Jakarta. Ibukotanya adalah kota Majalengka. Kabupaten Majalengka memiliki luas wilayah sekitar 1.204,24 km² dan terbagi menjadi 30 kecamatan. Wilayah ini memiliki beragam potensi, termasuk sektor pertanian, perkebunan, perikanan, dan industri kecil. Di samping itu, Majalengka juga memiliki beberapa tempat wisata menarik seperti Pantai Pangandaran, Curug Cikaso, dan Situ Cipanten.</p>
      </div>
    </section>
  </main>
  <h2 id="wisata" style="text-align: center; margin-top: 20px;">Yuk Ke Cipanten</h2>
    <!-- Daftar Paket Wisata -->
    <section id="paket-wisata">
    <div class="paket">
  <img src="gambarpenginapan.jpeg" alt="Gambar Penginapan Cipanten" />
  <h3>Penginapan Cipanten</h3>
  <p>Jelajahi keindahan pantai dengan paket wisata spesial.</p>
  <button class="openForm" data-paket="Penginapan Cipanten">Pesan Paket Wisata</button>
</div>
<div class="paket">
  <img src="wisata cipanten.jpg" alt="Gambar Wisata Cipanten" />
  <h3>Wisata Cipanten</h3>
  <p>Nikmati suasana pegunungan dengan paket wisata eksklusif.</p>
  <button class="openForm" data-paket="Wisata Cipanten">Pesan Paket Wisata</button>
</div>
<div class="paket">
  <img src="wisata cipanten.jpg" alt="Gambar Wisata Cipanten" />
  <h3>Spot Foto</h3>
  <p>Nikmati suasana pegunungan dengan paket wisata eksklusif.</p>
  <button class="openForm" data-paket="Spot Foto">Pesan Paket Wisata</button>
</div>

    </section>


    <!-- Form Pemesanan Paket Wisata -->
    
    <div id="formPopup" class="popup">
    <div class="popup-content">
      <span class="close">&times;</span>
      <h2>Pesan Paket Wisata</h2>
      <form action="proses_pemesanan.php" method="POST">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required />

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required />

        <label for="paket">Pilih Paket:</label>
        <select id="paket" name="paket" required>
          <option value="pantai">Paket Wisata Pantai</option>
          <option value="gunung">Paket Wisata Gunung</option>
        </select>

        <label for="tanggal">Tanggal:</label>
        <input type="date" id="tanggal" name="tanggal" required />

        <input type="submit" value="Pesan Sekarang" />
      </form>
    </div>
  </div>

<!-- Lokasi -->
<section id="lokasi" style="text-align: center; margin-top: 50px;">
  <h2>Lokasi Wisata Cipanten</h2>
  <p>Temukan lokasi wisata dengan peta di bawah ini:</p>
  <iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.5534430195057!2d108.32452172499563!3d-6.824036543173788!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f2406b0ed6805%3A0x86493d5c4d863bc5!2sWisata%20Situ%20Cipanten!5e0!3m2!1sid!2sid!4v1730731417952!5m2!1sid!2sid"
    width="800"
    height="450"
    style="border:0;"
    allowfullscreen=""
    loading="lazy"
    referrerpolicy="no-referrer-when-downgrade">
  </iframe>
</section>


    <script>
      function hapusPesanan() {
        if (confirm('Apakah Anda yakin ingin menghapus pesanan ini?')) {
          // Aksi untuk menghapus pesanan
          alert('Pesanan berhasil dihapus.');
        }
      }

      function toggleMenu() {
        const navMenu = document.getElementById('nav-menu');
        const hamburgerButton = document.querySelector('.hamburger');
        const isExpanded = hamburgerButton.getAttribute('aria-expanded') === 'true';

        navMenu.classList.toggle('show');
        navMenu.setAttribute('aria-hidden', isExpanded);
        hamburgerButton.setAttribute('aria-expanded', !isExpanded);
      }
    </script>
    <script>
  function toggleMenu() {
    const nav = document.querySelector('nav');
    nav.classList.toggle('show');
  }
</script>
<!-- pop up pesan paket -->
<script>
    const openFormButtons = document.querySelectorAll('.openForm');
const formPopup = document.getElementById('formPopup');
const closeButton = document.querySelector('.close');
const paketSelect = document.getElementById('paket');

openFormButtons.forEach(button => {
  button.addEventListener('click', () => {
    const paketName = button.getAttribute('data-paket');
    
    // Set the selected package in the form
    paketSelect.value = paketName;
    
    formPopup.style.display = 'block';
  });
});

closeButton.addEventListener('click', () => {
  formPopup.style.display = 'none';
});

window.addEventListener('click', (event) => {
  if (event.target == formPopup) {
    formPopup.style.display = 'none';
  }
});
  </script>
  </body>
</html>
