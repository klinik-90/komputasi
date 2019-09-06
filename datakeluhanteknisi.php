<script>
function islokasi()
{
    var answer = confirm("Apakah Anda Menuju Lokasi?")
    if (answer){
        document.messages.submit();
    }
    
    return false;  
}
</script>
<script>
function isperbaikan()
{
    var answer = confirm("Apakah anda sedang Perbaikan ?")
    if (answer){
        document.messages.submit();
    }
    
    return false;  
}
</script>
<script>
function isselesai()
{
    var answer = confirm("Apakah Perbaikan Sudah Selesai ?")
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
                    <h1 class="page-header">Data Keluhan Pelanggan</h1>
                </div>
                 <!-- end  page header -->
            </div>
            <div class="row">
                <div class="col-lg-12"> 
                        
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Data Keluhan Pelanggan
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal Keluhan</th>
                                            <th>Kode Pelanggan</th>
                                            <th>Nama Pelanggan</th>
                                            <th>Keluhan</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            include "koneksi.php";
                                            $q = mysqli_query($koneksi,"SELECT
                                            tbl_keluhan.kodekeluhan
                                            , tbl_keluhan.tanggalkeluhan
                                            , tbl_keluhan.kodepelanggan
                                            , tbl_pelanggan.namapelanggan
                                            , tbl_keluhan.keluhan
                                            , tbl_keluhan.status
                                            FROM
                                            db_maintenance.tbl_keluhan
                                            INNER JOIN db_maintenance.tbl_pelanggan 
                                                ON (tbl_keluhan.kodepelanggan = tbl_pelanggan.kodepelanggan)");
                                            while($r=mysqli_fetch_array($q))
                                            {
                                        ?>
                                        <td><?php echo $r["kodekeluhan"];?></td>
                                        <td><?php echo $r["tanggalkeluhan"];?></td>
                                        <td><?php echo $r["kodepelanggan"];?></td>
                                        <td><?php echo $r["namapelanggan"];?></td>
                                        <td><?php echo $r["keluhan"];?></td>
                                        <td><?php echo $r["status"];?></td>
                                        
                                        <td>
                                            
                                            <a class="btn btn-warning" href="updatestatuslokasi.php?kodekeluhan=<?php echo $r["kodekeluhan"];?>" onclick="return isdelete();" title="Kelokasi">
                                            <i class="fa fa-map-marker"></i>
                                            </a>
                                            <a class="btn btn-primary" href="updateperbaikan.php?kodekeluhan=<?php echo $r["kodekeluhan"];?>" onclick="return isperbaikan();" title="Perbaikan">
                                            <i class="fa fa-cogs"></i>
                                            </a>
                                            <a class="btn btn-success" href="updateselesai.php?kodekeluhan=<?php echo $r["kodekeluhan"];?>" onclick="return isselesai();" title="Selesai">
                                            <i class="fa fa-check-square-o"></i>
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