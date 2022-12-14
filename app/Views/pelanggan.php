<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pelanggan PLN</title>
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.css') ?>">
  </head>
  <body>
    <div class="container">
        <div class="card mt-3">
            <div class="card-header">
                <b>Pelanggan</b>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>No_Telp</th>
                        <th>Daya</th>
                        <th>Golongan</th>
                        <th>Token_Awal</th>
                        <th>idpel</th>
                    </tr>
                    <?php
                    foreach ($pelanggan as $row) : ?>
                        <tr>
                            <td><?php echo $row->nama; ?></td>
                            <td><?php echo $row->alamat; ?></td>
                            <td><?php echo $row->no_telp; ?></td>
                            <td><?php echo $row->daya; ?></td>
                            <td><?php echo $row->golongan; ?></td>
                            <td><?php echo $row->token_awal; ?></td>
                            <td><?php echo $row->id_pelanggan; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
     
            </div>
        </div>
    </div>
</body>
</html>