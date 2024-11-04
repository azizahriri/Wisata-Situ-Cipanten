<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Majalengka Explore</title>
    <link rel="stylesheet" href="style-detail.css">
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
                <li><a href="detailPemesanan.php">Detail</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <h2>Detail Pesanan Paket Wisata</h2>
        
        <table class="order-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pemesan</th>
                    <th>Email</th>
                    <th>Paket Wisata</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Baris 1 -->
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>john@example.com</td>
                    <td>Paket Wisata Pantai</td>
                    <td>2024-02-15</td>
                    <td><span class="status status-pending">Pending</span></td>
                    <td>
                        <div class="action-buttons">
                            <button class="btn btn-view" onclick="viewOrder(1)">Lihat</button>
                            <button class="btn btn-edit" onclick="editOrder(1)">Edit</button>
                            <button class="btn btn-cancel" onclick="cancelOrder(1)">Batal</button>
                        </div>
                    </td>
                </tr>
                <!-- Baris 2 -->
                <tr>
                    <td>2</td>
                    <td>Jane Smith</td>
                    <td>jane@example.com</td>
                    <td>Paket Wisata Gunung</td>
                    <td>2024-02-20</td>
                    <td><span class="status status-confirmed">Confirmed</span></td>
                    <td>
                        <div class="action-buttons">
                            <button class="btn btn-view" onclick="viewOrder(2)">Lihat</button>
                            <button class="btn btn-edit" onclick="editOrder(2)">Edit</button>
                            <button class="btn btn-cancel" onclick="cancelOrder(2)">Batal</button>
                        </div>
                    </td>
                </tr>
                <!-- Baris 3 -->
                <tr>
                    <td>3</td>
                    <td>Mike Johnson</td>
                    <td>mike@example.com</td>
                    <td>Paket Wisata Pantai</td>
                    <td>2024-02-25</td>
                    <td><span class="status status-cancelled">Cancelled</span></td>
                    <td>
                        <div class="action-buttons">
                            <button class="btn btn-view" onclick="viewOrder(3)">Lihat</button>
                            <button class="btn btn-edit" onclick="editOrder(3)">Edit</button>
                            <button class="btn btn-cancel" onclick="cancelOrder(3)">Batal</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>


<script>
        function viewOrder(id) {
            // Fungsi untuk melihat detail pesanan
            alert('Melihat detail pesanan ID: ' + id);
        }

        function editOrder(id) {
            // Fungsi untuk mengedit pesanan
            alert('Mengedit pesanan ID: ' + id);
        }

        function cancelOrder(id) {
            // Fungsi untuk membatalkan pesanan
            if(confirm('Apakah Anda yakin ingin membatalkan pesanan ini?')) {
                alert('Pesanan ID: ' + id + ' dibatalkan');
            }
        }
    </script>


    </body>
</html>
