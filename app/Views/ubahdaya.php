<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ubah Daya</title>
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/custom.css') ?>">
  </head>
  <body>
  <div class="container">
        <div class="card mt-3">

            <div class="card-header">
                <b>Ubah Daya</b>
            </div>

            <div class="card-body">
                
            <?= form_open('/ubahdaya/create') ?>

            <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                    <input class="form-control" type="text" value="" name="nama">                    
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                    <input class="form-control" type="text" value="" name="alamat">                        
                </div>    
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">No.Telp</label>
                    <input class="form-control" type="text" value="" name="notelp">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Daya_Lama</label>
                    <input class="form-control" type="text" value="" name="Daya_Lama">                    
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Daya_Baru</label>
                    <input class="form-control" type="text" value="" name="Daya_Baru">                    
                </div>      
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Golongan</label>
                    <input class="form-control" type="text" value="" name="Golongan">                    
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">ID_Pel</label>
                    <input class="form-control" type="text" value="" name="Id_Pel">                    
                </div>                   
                <button class="btn btn-primary" >Save</button>
                <a href="<?= site_url("") ?>">Cancel</a>

                </form>
               
            </div>
                
            
        </div>
    </div>
</body>
</html>