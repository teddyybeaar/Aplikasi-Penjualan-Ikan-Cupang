<br>

    <div class="container">
    <div class="card text-center">
  <div class="card-header">
    Form Register
  </div>
  
  <div class="card-body">
  <form action="<?php echo base_url('user/regis') ?>" method="post" enctype="multipart/form-data" >
  <div class="row">
  <div class="col-sm-4">
  <label class=" form-control-label">Nama</label>
<input type="text"  name="nama" placeholder="Nama..." class="form-control" required>
<BR>
<label class=" form-control-label">Username</label>
<input type="text"  name="username" placeholder="Username..." class="form-control" required>
<br>

<label class=" form-control-label">Password</label>
<input type="password"  name="password" placeholder="Password..." class="form-control" required>
<br></div><div class="col-sm-4">

<label class=" form-control-label">Email</label>
<input type="email"  name="email" placeholder="Email..." class="form-control" required>
<br>
<label class=" form-control-label">Alamat</label>
<input type="text"  name="alamat" placeholder="Alamat..." class="form-control" required>
<br>
<label class=" form-control-label">Telepon</label>
<input type="text"  name="telepon" placeholder="Telepon..." class="form-control" required>
<br></div><div class="col-sm-4">
<label class=" form-control-label">Tempat Lahir</label>
<input type="text"  name="tempat" placeholder="Tempat Lahir..." class="form-control" required>
<br>
<label class=" form-control-label">Tanggal Lahir</label>
<br>
<input type="date"  name="tanggal" placeholder="Tanggal Lahir..." class="form-control" required>
<br>
</div>
</div>
<input type="submit" name="submit" value="Submit" class="btn btn-primary">
</div>
</form>  

  <div class="card-footer text-muted">
  

                                    
  </div>
</div>
<br>
</div>
  