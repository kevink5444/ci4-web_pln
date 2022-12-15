<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyPLN</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
</head>
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
                <h2 class="h2">1. Pilih Lokasi Pemasangan</h2>
                <p>Tentukan lokasi pasang baru listrik</p>
                <h2 class="h2">2. Isi Detail Layanan</h2>
                <p>Tentukan daya yang dibutuhkan, jenis layanan, dan keperluan</p>
                <h2 class="h2">3. Isi Data SLO</h2>
                <p>Lengkapi data SLO</p>
                <h2 class="h2">4. Pilih Token (khusus prabayar)</h2>
                <p>Pilih token perdana</p>
                <h2 class="h2">5. Isi data pelanggan</h2>
                <p>Lengkapi data diri pemohon layanan</p>
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