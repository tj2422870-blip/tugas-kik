<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan - ୨୧ Ayca Bakery ୨୧</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- NAVBAR -->
    <header>
        <div class="logo">୨୧ Ayca Bakery ୨୧</div>

        <nav>
            <a href="index.php">Beranda</a>
            <a href="tentang.php">Tentang Kami</a>
            <a href="produk.php">Produk</a>
            <a href="promo.php">Promo</a>
            <a href="pesan.php">Pesan</a>
            <a href="kontak.php">Kontak</a>
        </nav>
    </header>


    <!-- JUDUL -->
    <section class="pesan-header">
        <p class="subjudul">PEMESANAN</p>

        <h1>Pesan ୨୧ Ayca Bakery ୨୧</h1>

        <p>
            Isi formulir berikut untuk melakukan pemesanan
            ୨୧ Ayca Bakery ୨୧.
        </p>
    </section>


    <!-- FORM PEMESANAN -->
    <section class="pesan-section">

        <div class="pesan-form">

            <form action="#" method="post">

                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input
                        type="text"
                        id="nama"
                        name="nama"
                        placeholder="Masukkan nama kamu"
                        required
                    >
                </div>


                <div class="form-group">
                    <label for="produk">Pilih Produk</label>

                    <select id="produk" name="produk" required>
                        <option value="">-- Pilih Produk --</option>
                        <option value="Roti Cokelat">
                            Choco Bliss 🍫 - Rp8.000
                        </option>
                        <option value="Croissant">
                            Golden Croissant 🥐 - Rp10.000
                        </option>
                        <option value="Roti Keju">
                            Cheesy Melt 🧀 - Rp9.000
                        </option>
                        <option value="Roti Stroberi">
                            Berry Delight 🍓- Rp8.000
                        </option>
                    </select>
                </div>


                <div class="form-group">
                    <label for="jumlah">Jumlah</label>

                    <input
                        type="number"
                        id="jumlah"
                        name="jumlah"
                        min="1"
                        placeholder="Masukkan jumlah"
                        required
                    >
                </div>


                <div class="form-group">
                    <label for="whatsapp">Nomor WhatsApp</label>

                    <input
                        type="tel"
                        id="whatsapp"
                        name="whatsapp"
                        placeholder="08xxxxxxxxxx"
                        required
                    >
                </div>


                <div class="form-group">
                    <label for="alamat">Alamat Pengiriman</label>

                    <textarea
                        id="alamat"
                        name="alamat"
                        rows="4"
                        placeholder="Masukkan alamat pengiriman"
                        required
                    ></textarea>
                </div>


                <div class="form-group">
                    <label for="catatan">Catatan</label>

                    <textarea
                        id="catatan"
                        name="catatan"
                        rows="3"
                        placeholder="Contoh: Jangan terlalu manis"
                    ></textarea>
                </div>


                <button type="submit" class="btn pesan-btn">
                    Kirim Pesanan
                </button>

            </form>

        </div>


        <!-- INFORMASI -->
        <div class="pesan-info">

            <div class="pesan-icon">
                🛒
            </div>

            <h2>Pesan dengan Mudah</h2>

            <p>
                Pilih roti favoritmu, isi data pemesanan,
                kemudian kirim pesanan kepada ୨୧ Ayca Bakery ୨୧.
            </p>

            <div class="langkah">

                <div>
                    <strong>01</strong>
                    <span>Pilih produk</span>
                </div>

                <div>
                    <strong>02</strong>
                    <span>Isi data pemesanan</span>
                </div>

                <div>
                    <strong>03</strong>
                    <span>Kirim pesanan</span>
                </div>

            </div>

        </div>

    </section>


    <!-- FOOTER -->
    <footer>
        <p>© 2026 ୨୧ Ayca Bakery ୨୧. Semua Hak Dilindungi.</p>
    </footer>

</body>
</html>