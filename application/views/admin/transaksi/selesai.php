<?php
                    //session
                    if($this->session->flashdata('sukses')) {
                        echo '<div class="alert alert-success">';
                        echo $this->session->flashdata('sukses');
                        echo '</div>';
                    }
                    //error
                    echo validation_errors('<div class="alert alert-success">','</div>');
                    ?>
                    <a href="<?php echo base_url('admin/transaksi/cetak') ?>" target="_blank" class="btn btn-success"><i class="fa fa-file-pdf-o"></i> Cetak</a>
<hr>
<div class="dataTable_wrapper">
	<div class="col-md-4 pull-right">
    <div class="input-group input-daterange">

      <input type="text" id="min-date" class="form-control date-range-filter" data-date-format="yyyy-mm-dd" placeholder="From:">

      <div class="input-group-addon">to</div>

      <input type="text" id="max-date" class="form-control date-range-filter" data-date-format="yyyy-mm-dd" placeholder="To:">

    </div>
  </div>
<table  class="table table-striped table-bordered table-hover" id="my-table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID Transaksi</th>
                                            <th>Tanggal Transaksi</th>
                                            <th>Nama Produk</th>
                                            <th>Status Transaksi</th>
                                            <th>Subtotal</th>
                                            <th>Bukti Pembayaran</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i=1; foreach($verifikasi->result() as  $a){?>
                                        <?php if($a->status == 'selesai'){ ?>
                                        <tr>
                                        <td><?php echo $i;?></td>
					                    <td><?php echo $a->id_transaksi;?></td>
                                        <td><?php echo $a->tanggal_pesan;?></td>
                                        <td><?php echo $a->nama;?></td>
                                        <td><?php echo $a->status;?></td>
                                        <td><?php echo $a->subtotal;?></td>
                                        <td><img width="100" height="80" src="<?php echo base_url('assets/upload/bukti/'.$a->bukti)?>"></td>
                                        
                                        </tr>
                                        <?php $i++; }}?>
                                        </tbody>
                                </table>
                                