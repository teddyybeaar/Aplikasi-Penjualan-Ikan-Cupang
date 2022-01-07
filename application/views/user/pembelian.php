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
<table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID Transaksi</th>
                                            <th>Tanggal Transaksi</th>
                                            <th>Status Transaksi</th>
                                            <th>Subtotal</th>
                                            <th>Bukti Pembayaran</th>
                                            <th width="200">Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i=1; foreach($beli->result() as  $a){?>
                                        
                                        <tr>
                                        <td><?php echo $i;?></td>
					                    <td><?php echo $a->id_transaksi;?></td>
                                        <td><?php echo $a->tanggal_pesan;?></td>
                                        <td><?php echo $a->status;?></td>
                                        <td><?php echo $a->subtotal;?></td>
                                        <td><img width="100" height="80" src="<?php echo base_url('assets/upload/bukti/'.$a->bukti)?>"></td>
                                        <td> 
                                        <a href="<?php echo base_url('admin/transaksi/diterima/'.$a->id_transaksi)?>" class="btn btn-primary btn-sm" title="Konfirmasi Pesanan">Pesanan Diterima</a><br>
                                        <?php if($a->status != 'selesai'){ ?>
                                        <a href="<?php echo base_url('transaksi/pengembalian/'.$a->id_transaksi)?>" class="btn btn-warning btn-sm" title="Ajukan Pengembalian">Ajukan Pengembalian</a>
                                        <?php } ?>
                                    </td>
                                        </tr>
                                        <?php $i++; }?>
                                        </tbody>
                                </table>