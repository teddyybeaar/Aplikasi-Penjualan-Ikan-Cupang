<br>
<div class="container">
<h2 style="text-align:center">Konfirmasi Pemesanan</h2>
<div class="kotak2">
<?php
$grand_total = 0;
if ($cart = $this->cart->contents())
	{
		foreach ($cart as $item)
			{
				$grand_total = $grand_total + $item['subtotal'];
			}
		echo "<h4 style='text-align:center'>Total Belanja: Rp.".number_format($grand_total,0,",",".")."</h4>";	
		$get_no_pem = $this->produk->get_no_pem();
?>
<h4 style="text-align:center">Silahkan Melakukan Pembayaran Ke No Rek : 6123678123</h4>
<form class="form-horizontal" action="<?php echo base_url()?>shop/proses_order" method="post" name="frmCO" id="frmCO" enctype="multipart/form-data">
        <input type="hidden" name="id_transaksi" value="<?php echo $get_no_pem?>">
            <?php foreach ($this->cart->contents() as $items): ?>
                <input type="hidden" class="form-control" name="id" id="nama" placeholder="Nama Lengkap" value="<?php echo $items['id']?>">
                <?php endforeach; ?>
		<div class="form-group  has-success has-feedback">
            <label class="control-label col-xs-3" for="inputEmail">Email:</label>
            <div class="col-xs-9">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $user['email']?>">
            </div>
        </div>
        <div class="form-group  has-success has-feedback">
            <label class="control-label col-xs-3" for="firstName">Nama :</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap" value="<?php echo $user['nama']?>">
            </div>
        </div>
        <div class="form-group  has-success has-feedback">
            <label class="control-label col-xs-3" for="lastName">Alamat:</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" value="<?php echo $user['alamat']?>">
            </div>
        </div>
        <div class="form-group  has-success has-feedback">
            <label class="control-label col-xs-3" for="phoneNumber">Telp:</label>
            <div class="col-xs-9">
                <input type="tel" class="form-control" name="telepon" id="telp" placeholder="No Telp" value="<?php echo $user['telepon']?>">
            </div>
        </div>

        <div class="form-group  has-success has-feedback">
            <label class="control-label col-xs-3" for="phoneNumber">Bukti Pembayaran</label>
            <div class="col-xs-9">
                <input type="file" class="form-control" name="file" id="telp" placeholder="No Telp" value="<?php echo $user['telepon']?>" required>
            </div>
        </div>
        
        <div class="form-group  has-success has-feedback">
            <div class="col-xs-offset-3 col-xs-9">
                <button type="submit" class="btn btn-primary">Proses Pemesanan</button>
            </div>
        </div>
    </form>
    <?php
	}
	else
		{
			echo "<h3 style='border: 3px solid #e8e8e8;border-style: dashed;padding: 20px;font-size: 15px;text-align: center;'>
				Keranjang Belanja masih kosong</h3>";	
		}
	?>
</div>
    </div>
    <br>