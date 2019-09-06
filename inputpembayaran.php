
<div id="page-wrapper">
            <div class="row">
                 <!-- page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Input Data pembayaran</h1>
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
                                    <form role="form" role="form" method="post" action="savedatapelanggan.php" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Tanggal Pembayaran</label>
                                            <input class="form-control" name="kodepelanggan" required="true">
                                        </div>
                                        <div class="form-group">
                                            <label>Jumlah Tagihan</label>
                                            <input class="form-control" name="namapelanggan" required="true">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Upload</label>
                                            <textarea class="form-control" rows="3" name="alamat" required="true"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Nomor Whatsapp</label>
                                            <input class="form-control" name="nowa" required="true">
                                        </div>
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input class="form-control" name="username" required="true">
                                        </div>                                  
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" name="password" required="true">
                                        </div> 
                                        <div class="form-group">
                                           <input type="hidden" class="form-control" name="hakakses" value="Pelanggan">
                                        </div>
                                        
                                        <button type="submit" class="btn btn-success" name="simpan" title="Simpan"><i class="fa fa-save"></i></button>
                                        <button type="reset" class="btn btn-danger" name="reset" title="Batal"><i class="fa fa-times"></i></button>
                                    </form>
                                </div>
                               
                     <!-- End Form Elements -->
                </div>
            </div>
        </div>
        <!-- end page-wrapper -->

    </div>