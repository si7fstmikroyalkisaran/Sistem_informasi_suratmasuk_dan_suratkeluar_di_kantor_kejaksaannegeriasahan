<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM data_pelajaran WHERE id='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Update Data Pelajaran</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="kode" class="col-sm-3 control-label">Kode Pelajaran</label>
                             <div class="col-sm-9">
								<input type="text" name="kode" value="<?=$data['kode']?>"class="form-control" id="inputEmail3" placeholder="Nomor Perkara">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pelajaran" class="col-sm-3 control-label">Mata Pelajaran</label>
                            <div class="col-sm-9">
                                <input type="text" name="pelajaran" value="<?=$data['pelajaran']?>"class="form-control" id="inputEmail3" placeholder="Nama Peminjam">
                            </div>
                        </div>
                         <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Arsip</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=peminjaman&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Pinjaman
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
    $nope=$_POST['nope'];
	$peminjam=$_POST['peminjam'];
	$tglPinjam=$_POST['tahun']."-".$_POST['bulan']."-".$_POST['tanggal'];
	$tglKembali=$_POST['tahun_kem']."-".$_POST['bulan_kem']."-".$_POST['tanggal_kem'];
		$thnKem =$_POST['tahun_kem'];
		$thnpin =$_POST['tahun'];
		$blnKem =$_POST['bulan_kem'];
		$blnpin =$_POST['bulan'];
		$tglKem =$_POST['tanggal_kem'];
		$tglpin =$_POST['tanggal'];
	$lamapinjam= (($thnKem - $thnpin)*365)+(($blnKem - $blnpin)*30)+($tglKem - $tglpin);
    $ket=$_POST['ket'];
    //buat sql
    $sql="UPDATE peminjaman SET no_perkara = '$nope', peminjam='$peminjam', tgl_pinjam='$tglPinjam', tgl_kembali='$tglKembali', lama_pinjam='$lamapinjam',
	keterangan='$ket' WHERE id='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=peminjaman&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



