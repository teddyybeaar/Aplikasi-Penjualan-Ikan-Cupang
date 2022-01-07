                                
                                <form action="<?php echo base_url('admin/produk/tambah') ?>" method="post" enctype="multipart/form-data" >
                                <div class="col-lg-7">
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Nama</label></div>
                                        <div class="col-12 col-md-9"><input type="text" name="nama" placeholder="Nama..." class="form-control" required></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Deskripsi</label></div>
                                        <div class="col-12 col-md-9"><input type="text"  name="desk" placeholder="Deskripsi..." class="form-control" required></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Harga</label></div>
                                        <div class="col-12 col-md-9"><input type="text"  name="harga" placeholder="Harga..." class="form-control" required></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Stok</label></div>
                                        <div class="col-12 col-md-9"><input type="text"  name="stok" placeholder="Stok..." class="form-control" required></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Link Video</label></div>
                                        <div class="col-12 col-md-9"><input type="text"  name="vid" placeholder="Stok..." class="form-control" required></div>
                                    </div>
                                    <div class="row form-group">
                                    <div class="form-group">
    	<label>Foto</label>
        <input type="file" name="file" class="form-control" id="file">
        <div id="imagePreview"></div>
    </div>
                                    </div>
                                    </div>
                                    
                                    <hr>
                                    <div class="col-lg-7">
                                    <input type="submit" name="submit" value="Submit" class="btn btn-primary">
    <input type="reset" name="reset" value="Reset" class="btn btn-success">
    <a href="<?php echo base_url('admin/produk')?>" class="btn btn-success"><i class="fa fa-arrow-left"></i> Kembali </a><br>
                            </div>                                
</form>

                            