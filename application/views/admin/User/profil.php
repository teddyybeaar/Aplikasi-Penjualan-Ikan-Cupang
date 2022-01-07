                                
                                <form action="<?php echo base_url('admin/user/profil') ?>" method="post" enctype="multipart/form-data" >
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
                                        <div class="col-12 col-md-9"><input type="text"  name="password" value="<?php echo $admin['password'] ?>"  placeholder="Isi jika ingin diubah..." class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Level</label></div>
                                        <div class="col-12 col-md-9"><input disabled type="text"  name="password" value="<?php echo $admin['level'] ?>"  placeholder="Isi jika ingin diubah..." class="form-control"></div>
                                    <hr>
                                    <div class="col-lg-7">
                                    <input type="submit" name="submit" value="Submit" class="btn btn-primary">
    <input type="reset" name="reset" value="Reset" class="btn btn-success">
    <a href="<?php echo base_url('admin/produk')?>" class="btn btn-success"><i class="fa fa-arrow-left"></i> Kembali </a><br>
                            </div>                                
</form>

                            