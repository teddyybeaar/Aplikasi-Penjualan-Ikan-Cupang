<br>

    <div class="container">
    <div class="card text-center">
  <div class="card-header">
    Form Pengembalian
  </div>
  <div class="card-body">
  <form action="<?php echo base_url('transaksi/pengembalian/'.$a['id_transaksi']) ?>" method="post" enctype="multipart/form-data" >
  <label class=" form-control-label">Alasan</label>
<input type="text"  name="alasan" placeholder="Alasan..." class="form-control" required>
<label class=" form-control-label">Foto</label>
<input type="file"  name="file" placeholder="Deskripsi..." class="form-control" required>
<input type="hidden"  name="id" placeholder="Deskripsi..." class="form-control" value="<?php echo $a['id_transaksi'] ?>" required>
<br>
<input type="submit" name="submit" value="Submit" class="btn btn-primary">
</form>  
</div>
  <div class="card-footer text-muted">
  

                                    
  </div>
</div>
<br>
</div>
  