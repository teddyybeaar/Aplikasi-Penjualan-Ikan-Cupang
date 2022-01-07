<a href="<?php echo base_url('admin/user/tambahu') ?>" class="btn btn-primary"> Tambah User</a>
<?php
// Session 
if($this->session->flashdata('sukses')) { 
	echo '<div class="alert alert-success">';
	echo $this->session->flashdata('sukses');
	echo '</div>';
} 
// Error
echo validation_errors('<div class="alert alert-success">','</div>'); 
?>
<hr>
<table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Email</th>
                                            <th>Alamat</th>
                                            <th>Telepon</th>
                                            <th>TTL</th>
                                            <th>Status</th>
                                            <th width="200">Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i=1; foreach($user->result() as  $a){?>
                                        <tr>
                                        <td><?php echo $i;?></td>
					                    <td><?php echo $a->nama;?></td>
                                        <td><?php echo $a->username;?></td>
                                        <td><?php echo $a->password;?></td>
                                        <td><?php echo $a->email;?></td>
                                        <td><?php echo $a->alamat;?></td>
                                        <td><?php echo $a->telepon;?></td>
                                        <td><?php echo $a->tempat_lahir;?>,<?php echo $a->tanggal_lahir;?></td>
                                        <td><?php echo $a->status;?></td>
                                        <td> 
                                        <a href="<?php echo base_url('admin/user/editu/'.$a->id_user)?>" class="btn btn-primary" title="tanggapan"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                        <a href="<?php echo base_url('admin/user/deletu/'.$a->id_user);?>" class="btn btn-danger" title="hapus"><i class="fa fa-trash"></i></a>
                                        </td>
                                        </tr>
                                        <?php $i++; }?>
                                        </tbody>
                                </table>