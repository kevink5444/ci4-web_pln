<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan Migrasi</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url('migrasi') ?>">Migrasi Listrik</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            </li>
                </ul>
            </div>
        </div>
    </nav>
<header class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="h1"><center> Layanan Migrasi Listrik </center></h1>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="h2">1. Pilih ID Pelanggan</h2>
                <p>Memilih ID Pelanggan Yang Akan Dimigrasi</p>
                <h2 class="h2">2. Menentukan Jenis Perpindahan Layanan</h2>
                <p>Melakukan perpindahan golongan tarif,layanan listrik</p>
                <h2 class="h2">3. Memilih Token (jika berpindah ke Prabayar)</h2>
                <p>Memilih Token Awal jika pindah menggunakan sistem prabayar</p>
                <h2 class="h2">4. Menunggu Teknisi PLN</h2>
                <p>Menunggu teknisi datang ke lokasi untuk perpindahan layanan</p>
                <div>
            </div>
        </div>
    </div>

    <footer class="jumbotron jumbotron-fluid mt-5 mb-0">
		<div class="container text-center">Copyright &copy <?= Date('Y') ?> STIKI Malang</div>
	</footer>

    <!-- Jquery dan Bootsrap JS -->
    <script src="<?= base_url('js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
</body>

</html>