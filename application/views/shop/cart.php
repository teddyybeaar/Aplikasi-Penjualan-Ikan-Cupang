<br>
<div class="container">
<h2 style="text-align:center">Daftar Belanja</h2>
<?php
// Session 
if($this->session->flashdata('sukses')) { 
	echo '<div class="alert alert-info">';
	echo $this->session->flashdata('sukses');
	echo '</div>';
} 
// Error
echo validation_errors('<div class="alert alert-info">','</div>'); 
?>
<form action="<?php echo base_url()?>shop/ubah_cart" method="post" name="frmShopping" id="frmShopping" class="form-horizontal" enctype="multipart/form-data">
<?php
	if ($cart = $this->cart->contents())
		{
 ?>

<table class="table">
<tr>
<td colspan="6" align="right">
<a data-toggle="modal" data-target="#myModal" style="color:white"  class ='btn btn-sm btn-danger'><i class="fa fa-trash"></i> Kosongkan Keranjang</a>
<button class='btn btn-sm btn-success'  type="submit"><i class="fa fa-refresh"></i> Update Keranjang</button>
<a href="<?php echo base_url()?>shop/check_out"  class ='btn btn-sm btn-primary'>Lanjut Pemesanan</a>
</td>
</tr>
<?php
// Create form and send all values in "shopping/update_cart" function.
$grand_total = 0;
$i = 1;

foreach ($cart as $item):
$grand_total = $grand_total + $item['subtotal'];
$produk = $this->produk->getDBy('produk','*','id_produk',$item['id']);
?>
<input type="hidden" name="cart[<?php echo $item['id'];?>][id]" value="<?php echo $item['id'];?>" />
<input type="hidden" name="cart[<?php echo $item['id'];?>][rowid]" value="<?php echo $item['rowid'];?>" />
<input type="hidden" name="cart[<?php echo $item['id'];?>][name]" value="<?php echo $item['name'];?>" />
<input type="hidden" name="cart[<?php echo $item['id'];?>][price]" value="<?php echo $item['price'];?>" />
<input type="hidden" name="cart[<?php echo $item['id'];?>][gambar]" value="<?php echo $item['gambar'];?>" />
<input type="hidden" name="cart[<?php echo $item['id'];?>][qty]" value="<?php echo $item['qty'];?>" />
<tr>
<td width="10"><?php echo $i++; ?></td>
<td width="200"><img class="img-responsive" width="200" src="<?php echo base_url() . 'assets/upload/produk/'.$item['gambar']; ?>"/></td>
<td width="300"><?php echo $item['name']; ?></td>
<td style="font-size: 17px;">RP. <?php echo number_format($item['price'], 0,",","."); ?></td>
<td width="100"><input type="number" class="form-control input-sm" name="cart[<?php echo $item['id'];?>][qty]" value="<?php echo $item['qty'];?>" /></td>
<td width="50"><a href="<?php echo base_url()?>shop/hapus/<?php echo $item['rowid'];?>" class="btn btn-sm btn-danger"><i class="fa fa-remove"></i></a></td>
<?php endforeach; ?>
</tr>
<tr>
<td colspan="6" align="right"><b>Order Total: Rp <?php echo number_format($grand_total, 0,",","."); ?></b></td>
</tr>

</table>
<?php
		}
	else
		{
			echo "<h3 style='border: 3px solid #e8e8e8;border-style: dashed;padding: 20px;font-size: 15px;!important;text-align: center;'>
				DAFTAR BELANJA MASIH KOSONG!</h3>";	
		}	
?>
</form>


  <!-- Modal Penilai -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-md">
      <!-- Modal content-->
      <div class="modal-content">
      	<form method="post" action="<?php echo base_url()?>shop/hapus/all">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Konfirmasi</h4>
        </div>
        <div class="modal-body">
			Anda yakin mau mengosongkan Shopping Cart?
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Tidak</button>
          <button type="submit" class="btn btn-sm btn-default">Ya</button>
        </div>
        
        </form>
      </div>
      
    </div>
  </div>
  </div>
  <br>
  <!--End Modal-->
