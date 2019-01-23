<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Peminjaman Arsip</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM data_surat WHERE id='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Kantor Kejaksaan Negeri Asahan</h2>
                        <h4> Jalan WR.Supratman, Mekar Baru, Kisaran Barat  <br>
                              Kabupaten Asahan, Sumatera Utara, Kode Pos : 212111</h4>
                        <hr>
                        <h3>DATA REKAP SURAT</h3>
                        <table class="table table-bordered table-striped table-hover">
                            <tbody>
								<tr>
                                    <td>Tanggal</td> <td><?= $data['tanggal'] ?></td>
                                </tr>
                                <tr>
                                    <td>Penerima/ Pengirim</td> <td><?= $data['pt'] ?></td>
                                </tr>
                                <tr>
                                    <td>Sifat</td> <td><?= $data['sifat'] ?></td>
                                </tr>
                                <tr>
                                    <td>Jenis</td> <td><?= $data['jenis'] ?></td>
                                </tr>
								<tr>
                                    <td>Prihal</td> <td><?= $data['prihal'] ?> hari</td>
                                </tr>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Sekretaris, S.Hum<strong></u><br>
                                        NIP.102871291416712
									</td>
								</tr>
							</tfoot>
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>
