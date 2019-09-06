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
                    <h1 class="page-header">Data Pembayaran</h1>
                </div>
                 <!-- end  page header -->
            </div>
            <div class="row">
                <div class="col-lg-12"> 
                        
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Data Pembayaran
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                                                <th>No</th>
                                                                <th>Tanggal Pembayaran</th>
                                                                <th>Nama Pelanggan</th>
                                                                <th>Total Tagihan</th>
                                                                <th>Jumlah Bulan</th>
                                                                <th>Total Bayar</th>
                                                                <th>Bukti Pembayaran</th>
                                                                <th>Status Pembataran</th>
                                                                <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            include "koneksi.php";
                                            $q = mysqli_query($koneksi,"SELECT
                                                    tbl_pembayaran.kodepembayaran
                                                    , tbl_pembayaran.tanggalpembayaran
                                                    , tbl_pembayaran.kodepenjualan
                                                    , tbl_penjualan.kodepelanggan
                                                    , tbl_pelanggan.namapelanggan
                                                    , tbl_penjualan.total
                                                    , tbl_pembayaran.totalbayar
                                                    , tbl_pembayaran.jumlah
                                                    , tbl_pembayaran.buktipembayaran
                                                    , tbl_pembayaran.status
                                                FROM
                                                    db_maintenance.tbl_penjualan
                                                    INNER JOIN db_maintenance.tbl_pelanggan 
                                                        ON (tbl_penjualan.kodepelanggan = tbl_pelanggan.kodepelanggan)
                                                    INNER JOIN db_maintenance.tbl_pembayaran 
                                                        ON (tbl_pembayaran.kodepenjualan = tbl_penjualan.kodepenjualan) where namapelanggan='$_SESSION[username]'");
                                            while($r=mysqli_fetch_array($q))
                                            {
                                        ?>
                                        <td><?php echo $r["kodepembayaran"];?></td>
                                                            <td><?php echo $r["tanggalpembayaran"];?></td>
                                                            <td><?php echo $r["namapelanggan"];?></td>
                                                            <td><?php echo $r["total"];?></td>
                                                            <td><?php echo $r["jumlah"];?></td>
                                                            <td><?php echo $r["totalbayar"];?></td>
                                                            <td><img src="admin/fotobayar/<?php echo $r["buktipembayaran"];?>" width="100px" height="100px"/></td>
                                                            <td><?php echo $r["status"];?></td>
                                                            <td>
                                                                                                                                
                                                               
                                                               <a class="btn btn-primary" href="index.php?page=editdatapelanggan&kodepelanggan=<?php echo $r["kodepelanggan"];?>" title="Cetak">
                                                                <i class="fa fa-print"></i>
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