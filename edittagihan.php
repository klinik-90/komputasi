<?php
    include "koneksi.php";
    $qedit = mysqli_query($koneksi,"SELECT
    tbl_penjualan.kodepenjualan
    , tbl_penjualan.tanggalpenjualan
    , tbl_penjualan.kodepelanggan
    , tbl_pelanggan.namapelanggan
    , tbl_penjualan.harga
    , tbl_penjualan.jumlah
    , tbl_penjualan.total
FROM
    db_maintenance.tbl_penjualan
    INNER JOIN db_maintenance.tbl_pelanggan 
        ON (tbl_penjualan.kodepelanggan = tbl_pelanggan.kodepelanggan) where kodepenjualan='$_GET[kodepenjualan]'");
    $dedit = mysqli_fetch_array($qedit);
?>
<div id="page-wrapper">
            <div class="row">
                 <!-- page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Input Data Pembayaran</h1>
                </div>
                <!--end page header -->
            </div>
 <div class="row">
                <div class="col-lg-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <b> Masukan Data Pembayaran</b>
                        </div>
                        <div class="panel-body">
                            <div class="row">

                                <div class="col-lg-12">
                                    <form role="form" role="form" method="post" action="savetagihan.php" enctype="multipart/form-data">
                                        <div class="form-group">
                                        <input class="form-control" name="kodepenjualan" required="true" readonly value="<?php echo $dedit["kodepenjualan"]?>" type="hidden">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Penjualan</label>
                                            <input type="date" class="form-control" name="tanggalpembayaran" required="true">
                                        </div>
                                         <div class="form-group">
                                            <input class="form-control" name="namapelanggan" required="true" value="<?php echo $dedit["namapelanggan"]?>" type="hidden">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" name="harga" required="true" value="<?php echo $dedit["harga"]?>" type="hidden">
                                        </div>
                                        
                                        <div class="form-group">
                                            <input class="form-control" name="jumlah" required="true" value="<?php echo $dedit["jumlah"]?>" type="hidden">
                                        </div>
                                        <div class="form-group">
                                            <label>Total</label>
                                            <input class="form-control" name="total" required="true" value="<?php echo $dedit["total"]?>">
                                        </div>
                                        
                                         <label>Bukti Bayar</label>
                                            <div>
                                                    <span class="btn btn-file btn-success"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file" name="gambar" accept="image/jpeg" /></span>
                                                    
                                            </div>
                                            <input class="form-control" name="status" required="true" value="Belum Terverifikasi" type="hidden">
                                        </p>
                                            <input type="submit" class="btn btn-primary" value="Simpan Data" name="simpan"/>
                                            <input type="reset" class="btn btn-danger" value="Bersih" name="bersih"/>
                                        </div>
                                        
                                    </form>
                                </div>
                               
                     <!-- End Form Elements -->
                </div>
            </div>
        </div>
        <!-- end page-wrapper -->

    </div>