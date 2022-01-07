<a href="<?php echo base_url('admin/user/tambaha') ?>" class="btn btn-primary"> Tambah Admin</a>
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
                                            <th>Level</th>
                                            <th width="100">Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i=1; foreach($admin->result() as  $a){?>
                                        <tr>
                                        <td><?php echo $i;?></td>
					                    <td><?php echo $a->nama;?></td>
                                        <td><?php echo $a->username;?></td>
                                        <td><?php echo $a->level;?></td>
                                        <td> 
                                        <a href="<?php echo base_url('admin/user/edita/'.$a->id_admin)?>" class="btn btn-primary" title="tanggapan"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                        <a href="<?php echo base_url('admin/user/deleta/'.$a->id_admin);?>" class="btn btn-danger" title="hapus"><i class="fa fa-trash"></i></a>
                                        </td>
                                        </tr>
                                        <?php $i++; }?>
                                        </tbody>
                                </table>