<a href="<?php echo base_url('admin/produk/tambah') ?>" class="btn btn-primary"> Tambah Produk</a>
<hr>
<table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Deskripsi</th>
                                            <th>Harga</th>
                                            <th>Stok</th>
                                            <th>Foto</th>
                                            <th width="100">Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i=1; foreach($produk->result() as  $a){?>
                                        <tr>
                                        <td><?php echo $i;?></td>
					                    <td><?php echo $a->nama;?></td>
                                        <td><?php echo $a->deskripsi;?></td>
                                        <td><?php echo $a->harga;?></td>
                                        <td><?php echo $a->stok;?></td>
                                        <td><img width="100" height="80" src="<?php echo base_url('assets/upload/produk/'.$a->foto)?>"></td>
                                        <td> 
                                        <a href="<?php echo base_url('admin/produk/edit/'.$a->id_produk)?>" class="btn btn-primary" title="tanggapan"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                        <a href="<?php echo base_url('admin/produk/delete/'.$a->id_produk);?>" class="btn btn-danger" title="hapus"><i class="fa fa-trash"></i></a>
                                        </td>
                                        </tr>
                                        <?php $i++; }?>
                                        </tbody>
                                </table>