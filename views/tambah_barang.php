<?php
$halaman ="barang";
session_start();
include_once 'template/header.php';
include_once 'template/sidebar.php';
include_once 'template/topbar.php';

include_once '../controllers/C_barang.php';

$barang= new C_barang();
?>

    <div class="container-fruid">

    <!-- page heading -->
    <!-- <h1 class"h3 mb-2 text-gray-800"><?= $Halaman ?></h1> -->

    <!-- DataTables example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Tambah Barang</h6>
</div>
<div class="card-body">
    <div class="table-responsive">

    <!-- start isi dari konten card -->

       <div class ="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <form action="../routers/r_barang.php?aksi=tambah" method="POST" 
            class="user" enctype="multipart/form-data">


                                 <!-- ini form nama yang menerima inputan nama dari user -->
                             <div class="form-group">
                                    <input type="number" class="form-control form-control-user"
                                     id = "exampleInputEmail" placeholder="Id" name="id" hidden>
        
                                </div>


                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"
                                     id = "exampleInputEmail" placeholder="NIP" name="nip">
        
                                </div>


                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"
                                     id = "exampleInputEmail" placeholder="Nama Pegawai" name="nama_pegawai">
        
                                </div>


                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"
                                     id = "exampleInputEmail" placeholder="Mata Pelajaran" name="Mata_pelajaran">
        
                                </div>



                                <div class="input-field">
                                    <input type="submit" class="btn btn-primary btn-user btn-block"
                                    value="Tambah Barang" id="" name="login">
        
                                </div>
                        </from>
                        </div>
                    

                             

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include_once 'template/footer.php';
        ?>
    </div>
</div>
   

</body>

</html>