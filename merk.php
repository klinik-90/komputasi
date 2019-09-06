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
<?php
	include "koneksi.php";
?>
<div id="content">
            <div class="inner">
                <div class="row">
                    <div class="col-lg-12">
                        <h2> Merk </h2>
                    </div>
                </div>
                <hr />
                <div class="row">
                <div class="col-lg-12">
                    <a class="btn btn-primary" href="index.php?page=inputmerk">
                                Tambah Merk
                            </a>
                            <br/>
                            <br/>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Merk
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                        <tr>
                            <th>Kode Merk</th>
                            <th>Merk</th>
                            <th>Foto Merk</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
						<?php
							$q = mysqli_query($koneksi,"select * from merk");
							while($r=mysqli_fetch_array($q))
							{
						?>
                        <tr>
                            <td><?php echo $r["kodemerk"];?></td>
                            <td><?php echo $r["namamerk"];?></td>
                            <td><img src="fotomerk/<?php echo $r["fotomerk"];?>" width="100px" height="100px"/></td>
                            <td>
							<a class="btn btn-warning" href="index.php?page=editmerk&kodemerk=<?php echo $r["kodemerk"];?>">
							EDIT
							</a>
                            <a class="btn btn-danger" href="deletemerk.php?kodemerk=<?php echo $r["kodemerk"];?>" onclick="return isdelete();">
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