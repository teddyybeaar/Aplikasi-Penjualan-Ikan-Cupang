                                
                                <form action="<?php echo base_url('admin/user/edita/'.$admin['id_admin']) ?>" method="post" enctype="multipart/form-data" >
                                <div class="col-lg-7">
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Nama</label></div>
                                        <div class="col-12 col-md-9"><input type="text" name="nama" value="<?php echo $admin['nama'] ?>" placeholder="Nama..." class="form-control" required></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Usenname</label></div>
                                        <div class="col-12 col-md-9"><input type="text"  name="username" value="<?php echo $admin['username'] ?>" placeholder="Username..." class="form-control" required></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Password</label></div>
                                        <div class="col-12 col-md-9"><input type="password"  name="password"  placeholder="Isi jika ingin diubah..." class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Level</label></div>
                                        <div class="col-12 col-md-9"><select name="level" class="form-control">
			<option readonly>-- Pilih Level--</option>
			<option value=1>Super Admin</option>
            <option value=2>Admin</option>
		</select></div></div>
                                    </div>
                                    <hr>
                                    <div class="col-lg-7">
                                    <input type="submit" name="submit" value="Submit" class="btn btn-primary">
    <input type="reset" name="reset" value="Reset" class="btn btn-success">
    <a href="<?php echo base_url('admin/produk')?>" class="btn btn-success"><i class="fa fa-arrow-left"></i> Kembali </a><br>
                            </div>                                
</form>

                            