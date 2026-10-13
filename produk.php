<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk - ୨୧ Ayca Bakery ୨୧</title>

    <!-- CSS utama -->
    <link rel="stylesheet" href="css/style.css">

    <!-- CSS khusus halaman produk -->
    <style>

        /* =========================
           DAFTAR PRODUK
        ========================= */

        .produk {
            padding: 30px 7% 70px;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 25px;
            width: 100%;
            box-sizing: border-box;
        }

        /* CARD PRODUK */
        .produk-card {
            width: 100%;
            min-width: 0;
            box-sizing: border-box;
            background-color: white;
            padding: 25px;
            text-align: center;
            border-radius: 20px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        }

        /* KOTAK FOTO */
        .produk-gambar {
            width: 100%;
            height: 160px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f8ead7;
            border-radius: 15px;
            overflow: hidden;
            margin-bottom: 20px;
        }

        /* FOTO PRODUK */
        .produk-gambar img {
            width: 100px !important;
            height: 90px !important;
            max-width: 100px !important;
            max-height: 90px !important;
            min-width: 0 !important;
            object-fit: contain !important;
            display: block !important;
        }

        /* NAMA PRODUK */
        .produk-card h2 {
            color: #7b3f18;
            font-size: 24px;
            margin-bottom: 10px;
        }

        /* DESKRIPSI */
        .produk-card p {
            color: #665247;
            line-height: 1.6;
            margin-bottom: 15px;
            font-size: 15px;
        }

        /* HARGA */
        .produk-card h3 {
            color: #a85d2a;
            font-size: 20px;
            margin-bottom: 20px;
        }

        /* TOMBOL */
        .produk-card .btn {
            display: inline-block;
            padding: 14px 25px;
            background-color: #98451f;
            color: white;
            text-decoration: none;
            border-radius: 30px;
            font-weight: bold;
        }

        .produk-card .btn:hover {
            background-color: #7b3517;
        }

        /* RESPONSIVE HP */
        @media (max-width: 900px) {
            .produk {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 600px) {
            .produk {
                grid-template-columns: 1fr;
            }
        }

    </style>
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


    <!-- JUDUL HALAMAN -->
    <section class="judul-halaman">
        <h1>Produk ୨୧ Ayca Bakery ୨୧</h1>
        <p>Pilihan roti lezat untuk menemani setiap momen.</p>
    </section>


    <!-- DAFTAR PRODUK -->
    <section class="produk">

        <!-- ROTI COKELAT -->
        <div class="produk-card">

            <div class="produk-gambar">
                <img src="assets/roti-cokelat.jpg" alt="Roti Cokelat">
            </div>

            <h2>Choco Bliss 🍫</h2>

            <p>
                Roti lembut dengan isian cokelat
                yang manis dan lezat.
            </p>

            <h3>Rp8.000</h3>

            <a href="pesan.php" class="btn">
                Pesan Sekarang
            </a>

        </div>


        <!-- CROISSANT -->
        <div class="produk-card">

            <div class="produk-gambar">
                <img src="assets/croissant.jpg" alt="Croissant">
            </div>

            <h2>Golden Croissant 🥐</h2>

            <p>
                Croissant renyah dengan rasa
                gurih dan lembut di dalam.
            </p>

            <h3>Rp10.000</h3>

            <a href="pesan.php" class="btn">
                Pesan Sekarang
            </a>

        </div>


        <!-- ROTI KEJU -->
        <div class="produk-card">

            <div class="produk-gambar">
                <img src="assets/roti-keju.jpg" alt="Roti Keju">
            </div>

            <h2>Cheesy Melt 🧀</h2>

            <p>
                Roti lembut dengan taburan keju
                yang gurih dan nikmat.
            </p>

            <h3>Rp9.000</h3>

            <a href="pesan.php" class="btn">
                Pesan Sekarang
            </a>

        </div>


        <!-- ROTI STROBERI -->
        <div class="produk-card">

            <div class="produk-gambar">
                <img src="assets/roti-stroberi.jpg" alt="Roti Stroberi">
            </div>

            <h2>Berry Delight 🍓</h2>

            <p>
                Roti lembut dengan rasa stroberi
                yang manis dan segar.
            </p>

            <h3>Rp8.000</h3>

            <a href="pesan.php" class="btn">
                Pesan Sekarang
            </a>

        </div>

    </section>


    <!-- FOOTER -->
    <footer>
        <p>© 2026 ୨୧ Ayca Bakery ୨୧. Semua Hak Dilindungi.</p>
    </footer>

</body>
</html>