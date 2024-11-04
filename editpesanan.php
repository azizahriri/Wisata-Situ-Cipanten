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
