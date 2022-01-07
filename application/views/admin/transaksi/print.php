
<html>
<head>
	<title>Cetak Surat Keluar</title>
	<link href="<?php echo base_url()?>assets/front/vendor/bootstrap/css/bootstrap.css?v2" rel="stylesheet">
</head>
<body onload="print()">
<page size="A4" layout="portrait">
<style>

</style>



<table width="700" border="0" cellspacing="1" cellpadding="1" class=no-style>
  <tr>
    <td align="center" width="16%" rowspan="2"><img src="<?php echo base_url('assets/upload/produk/l1.png')?>" width="80" height="80"></td>
    <td valign=top align="center" nowrap><h2>PatriotBetta</h2></td>
  </tr>
  <tr>
    <td width="84%" align="center">
	JL. LET. SUKARNA NO. 66
	CIAMPEA 
	BOGOR 
	JAWA BARAT <b><br></b>
	</td>
  </tr>
  
</table><br><br>

<table width="700" border="0" align=center cellspacing="1" cellpadding="1" class=no-style>
   <tr> 
    <td align=center> <br/><p><b>Total Penjualan</b></p></td>
    
  </tr>
	
</table>	<br/>

<table class="table table-bordered" border="1" align="center" width="100%">
<tr>
	<th>No. </th>
	<th>ID transaksi</th>
	<th>Tanggal transaksi</th>
	<th>Status transaksi</th>
    <th>Nama Produk</th>
	<th>Total bayar</th>
</tr>

<?php
if( ! empty($transaksi)){
	$no = 1;
	foreach($transaksi->result() as $data){ ?>
        <?php if($data->status == 'selesai'){
		 
		echo "<tr>";
		echo "<td>".$no."</td>";
		echo "<td>".$data->id_transaksi."</td>";
		echo "<td>".$data->tanggal_pesan."</td>";
		echo "<td>".$data->status."</td>";
        echo "<td>".$data->nama."</td>";
		echo "<td>".$data->subtotal."</td>";
		echo "</tr>";
		
		$no++;
	 }} 
} ?>
<?php 
 echo "<tr>";
 echo "<td></td>";
 echo "<td></td>";
 echo "<td></td>";
 echo "<td></td>";
 echo "<td>".'Total'."</td>";
 echo "<td>".$total['total']."</td>";
 echo "</tr>";
 ?>


</table>
<table width="700" border="0" cellspacing="1" cellpadding="1" class=no-style>
  <tr>
    
  </tr>
  <tr>
    <td width="50%" align=right valign=midle height=150>
	Mengetahui<br>Pemilik Toko<br/> 
	</td>
    
  </tr>
  <tr align=right valign=bottom>
    <td>
	<u>-. Fitra Rika Ramadhan</u><br/>
	</td>
    
  </tr></table>

</page>
</body>
</html>
