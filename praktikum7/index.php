<?php
    include "koneksi.php";
    $kelas = ['SE-02-A', 'SE-02-B', 'SE-02-C'];
    $sql = "SELECT * FROm data";
    $data = $conn->query($sql);
?>
<!doctype html> <!--membuat halaman dokumen form mahasiswa--->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>CRUD PHP</title><!-- untuk membuat judul CRUD PHP-->
  </head>
  <body>
    <div class="container"><!--untuk membuat kelas container-->
        <h1 class="text-center mt-5 mb-5">Form Mahasiswa</h1><!---membuat judul kelas form mahasiswa-->
        <div class="row">
            <div class="col-lg-6 mb-5">
                <h4>Input Data</h4>
                <form action="simpan.php" method="post"><!--membuat form simpan.php dalam koding-->
                    <div class="form-group">
                        <label for="nama">Nama</label><!---membuat label nama pada form-->
                        <input type="text" name="nama" placeholder="Nama" class="form-control" required><!--membuat nama pada input form-->
                    </div><!---untuk mengakhiri input form nama tersebut-->
                    <div class="form-group">
                        <label for="kelas">Kelas</label><!--membuat label kelas pada form-->
                        <select name="kelas" class="form-control" required><!--melalkukan select name pada form control-->
                            <option value="">Pilih</option><!--membuat input pilih pada option-->
                            <?php foreach($kelas as $kl) : ?>
                            <option value="<?= $kl; ?>"><?= $kl; ?></option> <!--membuat input pilih pada kelas tersebut-->    
                            <?php endforeach; ?>                       
                        </select>
                    </div>
                    <div class="form-group"><!--untuk membuat form input alamat-->
                        <label for="alamat">Alamat</label><!--untuk membuat input label alamat pada form-->
                        <input type="text" name="alamat" placeholder="Alamat" class="form-control" required><!--membuat text alamat pada form tersebut-->
                    </div><!--untuk mengakhiri input form alamat-->

                    <button type="submit" class="btn btn-primary btn-block">Submit</button><!--membuat button submit pada form-->
                </form>
            </div>
            <div class="col-lg-6">
                <h4 class="d-flex justify-content-between align-items-center mb-3"><!--untuk ukuran konten pada data mahasiswa-->
                    <span class="text-muted">Data Mahasiswa</span><!--untuk membuat input data mahasiswa pada output form-->
                    <?php 
                    $sql = 'SELECT count(id) FROM data';
                    $result = $conn->query($sql);
                    $count = mysqli_fetch_array($result); ?>
                    <button class="btn btn-secondary btn-circle" style="border-radius: 150px;"><?php echo $count[0]; ?></button><!--untuk membuat button nomor input data mahasiswa-->
                </h4>
                    
                </h4>

                <?php foreach($data as $dt) : ?>
                <div class="card mb-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">

                            <h4><?= $dt['nama']; ?></h4><!--untuk berfungsi memasukan input nama mahasiswa tersebut-->
                    </div>
                    <div class="col-md-6">
                    <p class="text-right"><?= $dt['kelas'];?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                            <div><?= $dt['alamat']; ?></div><!--untuk berfungsi memasukan input alamat mahasiswa-->
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>               
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


  </body>
</html>