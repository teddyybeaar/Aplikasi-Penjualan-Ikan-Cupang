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
                                <form action="<?php echo base_url('admin/produk/edit/'.$produk['id_produk']);?>" method="post" enctype="multipart/form-data" >
                                <div class="col-lg-7">
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Nama</label></div>
                                        <div class="col-12 col-md-9"><input type="text" value="<?php echo $produk['nama'] ?>" name="nama" placeholder="Nama..." class="form-control" required></div>
                                        <input type="hidden" value="<?php echo $produk['id_produk'] ?>" name="id_produk">
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Deskripsi</label></div>
                                        <div class="col-12 col-md-9"><input type="text" value="<?php echo $produk['deskripsi'] ?>"  name="desk" placeholder="Deskripsi..." class="form-control" required></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Harga</label></div>
                                        <div class="col-12 col-md-9"><input type="text"  name="harga" value="<?php echo $produk['harga'] ?>" placeholder="Deskripsi..." class="form-control" required></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Stok</label></div>
                                        <div class="col-12 col-md-9"><input type="text"  name="stok" value="<?php echo $produk['stok'] ?>" placeholder="Deskripsi..." class="form-control" required></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Link Video</label></div>
                                        <div class="col-12 col-md-9"><input type="text"  name="vid" value="<?php echo $produk['vid'] ?>" placeholder="Link..." class="form-control" required></div>
                                    </div>
                                    <div class="form-group">
    	<label>Foto</label>
        <input type="file" name="file" class="form-control" id="file">
        <div id="imagePreview"></div>
        <img src="<?php echo base_url('assets/upload/produk/'.$produk['foto'])?>" style="position: absolute;height: 150px;width: 150px;margin-left: 5px;">
    </div>
                                    </div>
                                    <input type="hidden" value="<?php echo $produk['id_produk'] ?>" name="id_produk">
                                    <hr>
                                    
                                    <div class="col-lg-7">
                                    <input type="submit" name="submit" value="Submit" class="btn btn-primary">
    <input type="reset" name="reset" value="Reset" class="btn btn-success">
    <a href="<?php echo base_url('admin/produk')?>" class="btn btn-success"><i class="fa fa-arrow-left"></i> Kembali </a><br>
                            </div>                                
</form>

                            