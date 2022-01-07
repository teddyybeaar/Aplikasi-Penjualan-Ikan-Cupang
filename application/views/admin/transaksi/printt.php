<html>
<head>
	<title>Cetak PDF</title>
	<link href="<?php echo base_url()?>assets/front/vendor/bootstrap/css/bootstrap.css?v2" rel="stylesheet">
</head>
<body onload="print()">
<page size="A4" layout="portrait">
<h1 style="text-align: center;">Data Transaksi</h1>

<style>
table {
    border-collapse: collapse;
	width: 100%;
}

table, td, th {
    border: 1px solid black;
}
</style>

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
</page>
</body>
</html>
