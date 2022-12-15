<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyPLN</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url('perubahandaya') ?>">Ubah Daya Listrik</a>
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
                    <h1 class="h1"><center> Layanan Ubah Daya Listrik </center></h1>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="h2">1. Pilih ID Pelanggan</h2>
                <p>Tentukan ID Pelanggan Ubah Daya</p>
                <h2 class="h2">2. Detail Lokasi</h2>
                <p>Tentukan lokasi ubah daya listrik</p>
                <h2 class="h2">3. Pilih Layanan</h2>
                <p>Tentukan daya yang dibutuhkan, jenis layanan, dan keperluan</p>
                <h2 class="h2">4. Isi data SLO</h2>
                <p>Lengkapi data SLO</p>
                <h2 class="h2">5. Pilih Token (khusus prabayar)</h2>
                <p>Pilih token perdana</p>
                <h2 class="h2">6. Isi Data Pelanggan</h2>
                <p>Lengkapi data diri permohonan layanan</p>
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