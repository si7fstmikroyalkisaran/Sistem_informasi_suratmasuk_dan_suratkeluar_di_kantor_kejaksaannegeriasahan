<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM data_surat WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Surat</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        
                       <div class="form-group">
                            <label for="tanggal" class="col-sm-3 control-label">Tanggal</label>
                            <div class="col-sm-9">
                                <input type="text" name="tanggal" class="form-control" id="inputEmail3" placeholder="Tanggal" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="pt" class="col-sm-3 control-label">Pengirim / Penerima</label>
                            <div class="col-sm-9">
                                <input type="text" name="pt" class="form-control" id="inputEmail3" placeholder="PT" required>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="sifat" class="col-sm-3 control-label">Sifat</label>
                               <div class="col-sm-3 ">
                                <select name="sifat" class="form-control">
                                    <option value="Pria">Penting</option>
                                    <option value="Wanita">Tidak penting</option>
                                </select>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="jenis_s" class="col-sm-3 control-label">Jenis</label>
                            <div class="col-sm-9">
                                <input type="text" name="jenis" class="form-control" id="inputEmail3" placeholder="Jenis" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="prihal_s" class="col-sm-3 control-label">Prihal</label>
                            <div class="col-sm-9">
                                <input type="text" name="prihal" class="form-control" id="inputEmail3" placeholder="prihal" required>
                            </div>
                        </div>
                        <!--untuk tanggal lahir form tahun-bulan-tanggal 1998-10-10-->
                       
                        <!--end tanggal lahir-->           

                        
                        
                        
                        
                        
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Surat</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=penggajian&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Surat
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
    $tanggal_s=$_POST['tanggal'];
    $pt_s=$_POST['pt'];
	$sifat_s=$_POST['sifat'];
    $jenis_s=$_POST['jenis'];
    $prihal_s=$_POST['prihal'];
    //buat sql
    $sql="UPDATE data_surat SET tanggal='$tanggal_s',pt='$pt_s',sifat='$sifat_s',jenis='$jenis_s',prihal='$prihal_s' WHERE id ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=penggajian&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



