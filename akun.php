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
<div id="content">
            <div class="inner">
                <div class="row">
                    <div class="col-lg-12">
                        <h2> AKUN </h2>
                    </div>
                </div>
                <hr />
                <div class="row">
                <div class="col-lg-12">
                
                    <a class="btn btn-primary" href="index.php?page=inputakun">
                                Tambah Akun
                            </a>
                            <br/>
                            <br/>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Ongkos Kirim
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                        <tr>
                            <th>Nik</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Jenis Kelamin</th>
                            <th>Telepon</th>
                            <th>Agama</th>
                            <th>Hak Akses</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
						<?php
                            include "koneksi.php";
							$q = mysqli_query($koneksi,"select * from admin");
							while($r=mysqli_fetch_array($q))
							{
						?>
                        <tr>
                            <td><?php echo $r["nik"];?></td>
                            <td><?php echo $r["namaadmin"];?></td>
                            <td><?php echo $r["alamatadmin"];?></td>
                            <td><?php echo $r["jkadmin"];?></td>
                            <td><?php echo $r["teleponadmin"];?></td>
                            <td><?php echo $r["agamaadmin"];?></td>
                            <td><?php echo $r["hakakses"];?></td>
                            <td>
							<a href="index.php?page=editakun&nik=<?php echo $r["nik"];?>" class="btn btn-warning">
							EDIT
							</a>
                            <a href="deleteakun.php?nik=<?php echo $r["nik"];?>" class="btn btn-danger" onclick="return isdelete();">
                            HAPUS
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