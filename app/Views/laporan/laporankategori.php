<!DOCTYPE html>
<html>
<head>
  <title>Laporan Pasien</title>

  <link rel="stylesheet" href="<?php echo base_url() ?>assets/laporan/datatables-bs4/css/dataTables.bootstrap4.css">
</head>
<body>

  <table cellspacing="0" cellpadding="0" border="0" width="100%">
    <tr>
      <td align="center" width="10%">
      <!-- <img src="<?php echo base_url() ?>/assets/media/logos/logoputihmerah.png" width="130px"> -->
      </td>

      <td valign="top" colspan="2">
        <p align="center" style="font-size: 25px;font-family: 'Georgia';font-weight: bold;vertical-align: text-top;margin: 0;padding: 0;">Sistem Cek Golongan Darah Berbasis Internet Of Things</p>
  <p align="center" style="font-size: 14px;font-family: 'Calibri';font-weight: bold;vertical-align: text-top;margin: 0;padding: 0;">Kp. Jati Jembatan 1 Kalimalang, RT.007/RW.06, Jatimulya, Tambun Selatan, Kabupaten Bekasi, Jawa Barat 17510</p>
      </td>
    </tr>
  </table>
  <hr width="100%" height="10px">
	<h3 align="center"><u>Laporan Data Pasien</u></h3>
	<table cellspacing="0" cellpadding="0" border="0" width="100%">
	<tr border="0">
			<th border="0" align ="left" width="30%">Kategori Golongan Darah : <?php echo $kategori ?></th>
			<th border="0"></th>
			
			</tr>
	</table>
	<br>
  <div class="row">
	  <table class="table table-striped" width="100%" border="1" cellspacing="0" cellpadding="5">
      <thead>
			
        <tr align="center">
          <th width="1%">No</th>
          <th width="5%">Kode Pasien</th>
          <th>Nama Pasien</th>
          <th>Tanggal Lahir</th>          
          <th>Jenis Kelamin</th>
          <th>Alamat</th>
          <th>Golongan Darah</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          $no = 1;
          foreach($pasien as $row){
        ?>
            <tr>
              <td align="center"><?php echo $no; ?></td>
              <td align="left"><?php echo $row->kd_pasien; ?></td>
              <td align="left"><?php echo $row->nama_pasien; ?></td>
              <td align="center"><?php echo $row->tgl_lahir; ?></td>
              <td align="center"><?php echo $row->jenis_kelamin; ?></td>
              <td align="center"><?php echo $row->alamat; ?></td>
              <td align="center"><?php echo $row->nama_gol; ?></td>
            </tr>

        <?php $no++; 
            }
          ?>
      </tbody>
			
    </table>
    <br>
    <table cellspacing="0" cellpadding="0" border="0" width="100%">
		<tr>
        <td valign="top" width="50%">
      
        </td>

        <td valign="top" width="10%">
        </td>
						
        <td valign="top" style="text-align:right" width="40%">
				Total Pasien : &nbsp; <?php echo $banyakpasien ?> Pasien
				<br>

				<br>
				<br>

        </td>
      </tr>

      <tr>
        <td valign="top" width="25%">
       <p align="center" style="font-size: 14px;font-family: 'Times New Rowman';font-weight: bold;vertical-align: text-top;margin:0;padding: 0;">&nbsp;</p>
          <p align="center" style="font-size: 14px;font-family: 'Times New Rowman';font-weight: bold;vertical-align: text-top;margin:0;padding: 0;">Mengetahui,</p>
          <br>
          <br>
          <br>
          <p align="center" style="font-size: 14px;font-family: 'Times New Rowman';font-weight: bold;vertical-align: text-top;margin:0;padding: 0;">.......................................</p>
         </td>

        <td>
          &nbsp;
        </td>
						
        <td valign="top"  width="25%">
          <p align="center" style="font-size: 14px;font-family: 'Times New Rowman';font-weight: bold;vertical-align: text-top;margin:0;padding: 0;">Bekasi, <?php echo date("d-m-Y") ?></p>
          <p align="center" style="font-size: 14px;font-family: 'Times New Rowman';font-weight: bold;vertical-align: text-top;margin:0;padding: 0;">Menyetujui,</p>
          <br>
          <br>
          <br>
<p align="center" style="font-size: 14px;font-family: 'Times New Rowman';font-weight: bold;vertical-align: text-top;margin:0;padding: 0;">.......................................</p>
        </td>
      </tr>
			
    </table>
	 </div>



<script src="<?php echo base_url() ?>assets/laporan/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="<?php echo base_url() ?>assets/laporan/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url() ?>assets/laporan/datatables-bs4/js/dataTables.bootstrap4.js"></script>

<script src="<?php echo base_url() ?>assets/laporan/js/adminlte.min.js"></script>

<script src="<?php echo base_url() ?>assets/laporan/js/demo.js"></script>


</body>
</html>
