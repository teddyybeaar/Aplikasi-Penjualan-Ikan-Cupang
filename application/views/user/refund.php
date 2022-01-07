<br>
<div class="container">
<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" style="color:black" href="<?php echo base_url()?>user/refund"><i class="fa fa-rotate-left"></i> Pengajuan Pengembalian</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color:black" href="<?php echo base_url()?>user/verif"><i class="fa fa-check-square-o"></i> Verifikasi Admin</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color:black" href="<?php echo base_url()?>user/pembelian"><i class="fa fa-truck"></i> Dikirim</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color:black" href="<?php echo base_url()?>user/selesai"><i class="fa fa-check"></i> Selesai</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID Transaksi</th>
                                            <th>Tanggal Transaksi</th>
                                            <th>Nama Produk</th>
                                            <th>Subtotal</th>
                                            <th>Foto Produk</th>
                                            <th>Bukti Pembayaran</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i=1; foreach($beli->result() as  $a){?>
                                        <?php if($a->status == 'pengembalian'){ ?>
                                        <tr>
                                        <td><?php echo $i;?></td>
					                    <td><?php echo $a->id_transaksi;?></td>
                                        <td><?php echo $a->tanggal_pesan;?></td>
                                        <td><?php echo $a->nama;?></td>
                                        <td><?php echo $a->subtotal;?></td>
                                        <td><img width="100" height="80" src="<?php echo base_url('assets/upload/produk/'.$a->foto)?>"></td>
                                        <td><img width="100" height="80" src="<?php echo base_url('assets/upload/bukti/'.$a->bukti)?>"></td>
                                        <td>
                                        <?php if($a->status == 'selesai'){ ?> 
                                        <a href="<?php echo base_url('admin/transaksi/diterima/'.$a->id_transaksi)?>" class="btn btn-primary btn-sm" title="Konfirmasi Pesanan">Pesanan Diterima</a><br>
                                        
                                        <a href="<?php echo base_url('transaksi/pengembalian/'.$a->id_transaksi)?>" class="btn btn-warning btn-sm" title="Ajukan Pengembalian">Ajukan Pengembalian</a>
                                        <?php } ?>
                                    </td>
                                        </tr>
                                        <?php $i++; }}?>
</tbody>

</table>
  </div>
</div>
</div>
<br>