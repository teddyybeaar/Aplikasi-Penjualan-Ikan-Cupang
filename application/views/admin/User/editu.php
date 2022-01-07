                                
                                <form action="<?php echo base_url('admin/user/editu/'.$user['id_user']) ?>" method="post" enctype="multipart/form-data" >
                                <div class="col-lg-7">
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Nama</label></div>
                                        <div class="col-12 col-md-9"><input type="text" value="<?php echo $user['nama'] ?>" name="nama" placeholder="Nama..." class="form-control" required></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Usenname</label></div>
                                        <div class="col-12 col-md-9"><input type="text"  name="username" value="<?php echo $user['username'] ?>" placeholder="Username..." class="form-control" required></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Password</label></div>
                                        <div class="col-12 col-md-9"><input type="password"  name="password"  placeholder="Isi jika ingin mengubah..." class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Email</label></div>
                                        <div class="col-12 col-md-9"><input type="text"  name="email" value="<?php echo $user['email'] ?>" placeholder="Password..." class="form-control" required></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Alamat</label></div>
                                        <div class="col-12 col-md-9"><input type="text"  name="alamat" value="<?php echo $user['alamat'] ?>" placeholder="Password..." class="form-control" required></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Telepon</label></div>
                                        <div class="col-12 col-md-9"><input type="text"  name="telepon" value="<?php echo $user['telepon'] ?>" placeholder="Password..." class="form-control" required></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Tempat Lahir</label></div>
                                        <div class="col-12 col-md-9"><input type="text"  name="tempat" value="<?php echo $user['tempat_lahir'] ?>" placeholder="Password..." class="form-control" required></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Tanggal Lahir</label></div>
                                        <div class="col-12 col-md-9"><input type="date"  name="tanggal" value="<?php echo $user['tanggal_lahir'] ?>" placeholder="Password..." class="form-control" required></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Status</label></div>
                                        <div class="col-12 col-md-9"><select name="status" class="form-control">
			<option readonly>-- Pilih Status--</option>
			<option value="0">Belum Verifikasi</option>
            <option value="1">Sudah Verifikasi</option>
		</select></div></div>
                                    </div>
                                    <hr>
                                    <div class="col-lg-7">
                                    <input type="submit" name="submit" value="Submit" class="btn btn-primary">
    <input type="reset" name="reset" value="Reset" class="btn btn-success">
    <a href="<?php echo base_url('admin/user/user')?>" class="btn btn-success"><i class="fa fa-arrow-left"></i> Kembali </a><br>
                            </div>                                
</form>

                            