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
<table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID Transaksi</th>
                                            <th>Tanggal Transaksi</th>
                                            <th>Status Transaksi</th>
                                            <th>Nama Produk</th>
                                            <th>Subtotal</th>
                                            <th>Bukti Pembayaran</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i=1; foreach($verifikasi->result() as  $a){?>
                                        <?php if($a->status == 'pengembalian'){ ?>
                                        <tr>
                                        <td><?php echo $i;?></td>
					                    <td><?php echo $a->id_transaksi;?></td>
                                        <td><?php echo $a->tanggal_pesan;?></td>
                                        <td><?php echo $a->status;?></td>
                                        <td><?php echo $a->nama;?></td>
                                        <td><?php echo $a->subtotal;?></td>
                                        <td><img width="100" height="80" src="<?php echo base_url('assets/upload/bukti/'.$a->bukti)?>"></td>
                                        <td>
                                         
                                        <a data-toggle="modal" data-target="#seri"  class="btn btn-primary" title="Verifikasi Pesanan"><i class="fa fa-check" aria-hidden="true"></i></a>
                                        
                                        <?php if($a->status == "diterima"){ ?>
                                        <a href="<?php echo base_url('admin/transaksi/selesai/'.$a->id_transaksi)?>" class="btn btn-success" title="Verifikasi Pesanan"><i class="fa fa-check" aria-hidden="true"></i></a>
                                        <?php } ?>
                                        </td>
                                        </tr>
                                        <div class="modal fade" id="seri" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Masukkan Nomor Resi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="<?php echo base_url('admin/transaksi/verifikasi/'.$a->id_transaksi)?>" class="form-horizontal">  
            
      <div class="modal-body form">
                 <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">No Resi</label>
                            <div class="col-md-9">
                                <input name="resi" placeholder="No Resi . . ." class="form-control" type="text">
                                
                                <span class="help-block"></span>
                            </div>
                        </div>
                          
                    </div>
                    
            </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" name="submit" value="Submit" class="btn btn-primary">
      </div>
    </div>
  </div>
</div>
</form>
                                        <?php $i++; }} ?>
                                        </tbody>
                                </table>
                                
   