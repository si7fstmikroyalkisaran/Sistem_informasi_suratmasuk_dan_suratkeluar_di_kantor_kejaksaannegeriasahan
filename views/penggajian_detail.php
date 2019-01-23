<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Data Surat</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM data_surat WHERE id ='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">Tanggal</td> <td><?= $data['tanggal'] ?></td>
                        </tr>
                        <tr>
                            <td>Penerima / Pengirim</td> <td><?= $data['pt'] ?></td>
                        </tr>
                        <tr>
                            <td>Sifat</td> <td><?= $data['sifat'] ?></td>
                        </tr>
						<tr>
                            <td>Jenis</td> <td><?= $data['jenis'] ?></td>
                        </tr>
                        <tr>
                            <td>Prihal</td> <td><?= $data['prihal'] ?></td>
                        </tr>
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=penggajian&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Surat </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

