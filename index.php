<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>UMKM Wisata - Paket Wisata</title>
    <link rel="stylesheet" href="./styles.css" />
  </head>
  <body>
    <header>
      <h1>Wisata Situ Cipanten</h1>
      <button class="hamburger" aria-label="Menu" aria-expanded="false" onclick="toggleMenu()">&#9776;</button>
      <nav id="nav-menu" aria-hidden="true">
        <ul>
          <li><a href="#home">Beranda</a></li>
          <li><a href="#paket-wisata">Paket Wisata</a></li>
          <li><a href="#pesan">Pesan Paket</a></li>
        </ul>
      </nav>
    </header>

    <section id="home">
      <h2>Selamat Datang di UMKM Wisata</h2>
      <p>Temukan paket wisata menarik dan nikmati pengalaman liburan Anda bersama kami!</p>
    </section>

    <!-- Daftar Paket Wisata -->
    <section id="paket-wisata">
      <h2>Penginapan Cipanten</h2>
      <div class="paket">
        <img src="gambarpenginapan.jpeg" alt="Gambar Penginapan Cipanten" />
        <h3>Paket Penginapan Cipanten</h3>
        <p>Jelajahi keindahan pantai dengan paket wisata spesial.</p>
        <a href="#pesan">Pesan Sekarang</a>
      </div>
      <div class="paket">
        <img src="gambar-paket2.jpg" alt="Gambar Wisata Cipanten" />
        <h3>Wisata Cipanten</h3>
        <p>Nikmati suasana pegunungan dengan paket wisata eksklusif.</p>
        <a href="#pesan">Pesan Sekarang</a>
      </div>
    </section>

    <!-- Form Pemesanan Paket Wisata -->
    <section id="pesan">
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
    </section>

    <!-- Halaman Modifikasi Pemesanan Paket -->
    <section id="edit-pesan">
      <h2>Edit Pesanan</h2>
      <form action="modifikasi_pemesanan.php" method="POST">
        <label for="kode-pesanan">Kode Pesanan:</label>
        <input type="text" id="kode-pesanan" name="kode-pesanan" required />

        <label for="paket-baru">Pilih Paket Baru:</label>
        <select id="paket-baru" name="paket-baru" required>
          <option value="pantai">Paket Wisata Pantai</option>
          <option value="gunung">Paket Wisata Gunung</option>
        </select>

        <label for="tanggal-baru">Tanggal Baru:</label>
        <input type="date" id="tanggal-baru" name="tanggal-baru" required />

        <input type="submit" value="Update Pesanan" />
        <button type="button" onclick="hapusPesanan()">Hapus Pesanan</button>
      </form>
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
  </body>
</html>
