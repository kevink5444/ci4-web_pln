<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Pasang Baru</title>
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/custom.css') ?>">
  </head>
  <body>
  <div class="container">
        <div class="card mt-3">

            <div class="card-header">
                <b>Pasang Baru</b>
            </div>

            <div class="card-body">
                
            <?= form_open('/pasangbarumodel/create') ?>

            <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                    <input class="form-control" type="text" value="" name="nama">                    
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                    <input class="form-control" type="text" value="" name="alamat">                        
                </div>    
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">No Telp</label>
                    <input class="form-control" type="text" value="" name="no_telp">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Daya</label>
                    <input class="form-control" type="text" value="" name="daya">                    
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Golongan</label>
                    <input class="form-control" type="text" value="" name="golongan">                    
                </div>      
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Token_Awal</label>
                    <input class="form-control" type="text" value="" name="token_awal">                    
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">ID_Pel</label>
                    <input class="form-control" type="text" value="" name="idpel">                    
                </div>                   
                <button class="btn btn-primary" >Save</button>
                <a href="<?= site_url("") ?>">Cancel</a>

                </form>
               
            </div>
                
            
        </div>
    </div>
</body>
</html>