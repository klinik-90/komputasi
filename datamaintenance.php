<script>
function isdelete()
{
    var answer = confirm("Apakah anda ingin menghapus data ini ?")
    if (answer){
        document.messages.submit();
    }
    
    return false;  
}
</script>


<div id="page-wrapper">

            
            <div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Data Maintenance</h1>
                </div>
                 <!-- end  page header -->
            </div>
            <div class="row">
                <div class="col-lg-12"> 
                        
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Data Maintenance
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal Pembelian</th>
                                            <th>Nama Pelanggan</th>
                                            <th>Harga</th>
                                            <th>Jumlah Bulan</th>
                                            <th>Total</th>
                                            <th>Bayar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            include "koneksi.php";
                                            $q = mysqli_query($koneksi,"SELECT
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
        ON (tbl_penjualan.kodepelanggan = tbl_pelanggan.kodepelanggan) where tbl_pelanggan.namapelanggan ='$_SESSION[username]'");
                                            while($r=mysqli_fetch_array($q))
                                            {
                                        ?>
                                        <td><?php echo $r["kodepenjualan"];?></td>
                                        <td><?php echo $r["tanggalpenjualan"];?></td>
                                        <td><?php echo $r["namapelanggan"];?></td>
                                        <td><?php echo $r["harga"];?></td>
                                        <td><?php echo $r["jumlah"];?></td>
                                        <td><?php echo $r["total"];?></td>
                                        <td>
                                            <a class="btn btn-danger" href="index.php?page=edittagihan&kodepenjualan=<?php echo $r["kodepenjualan"];?>" title="Upload Pembayaran">
                                            <i class="fa fa-upload"></i>
                                            </a>
                                        </td>
                                        </tr>
                                        <?php
                                            }
                                        ?>                                     
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>