<br>

    <div class="container">
    <div class="card text-center">
  <div class="card-header">
    Profil
  </div>
  
  <div class="card-body">
  <form action="<?php echo base_url('user/update_profil') ?>" method="post" enctype="multipart/form-data" >
  <table align="center">
      <tr><td align="left">Nama</td><td></td><td align="right"><input type="text" name="nama" class="form-control" value="<?php echo $user['nama'] ?>" /></td></tr>
      <tr><td align="left">Username</td><td></td><td align="right"><input type="text" name="username" class="form-control" value="<?php echo $user['username'] ?>" /></td></tr>
      <tr><td align="left">Password</td><td></td><td align="right"><input type="text" name="password" class="form-control" value="<?php echo $user['password'] ?>" /></td></tr>
      <tr><td align="left">Email</td><td></td><td align="right"><input type="text" name="email" class="form-control" value="<?php echo $user['email'] ?>" /></td></tr>
      <tr><td align="left">Telepon</td><td></td><td align="right"><input type="text" name="telepon" class="form-control" value="<?php echo $user['telepon'] ?>" /></td></tr>
      <tr><td align="left">Alamat</td><td></td><td align="right"><input type="text" name="alamat" class="form-control" value="<?php echo $user['alamat'] ?>" /></td></tr>
      <tr><td align="left">Tempat Lahir</td><td></td><td align="right"><input type="text" name="tempat" class="form-control" value="<?php echo $user['tempat_lahir'] ?>" /></td></tr>
      <tr><td align="left">Tanggal Lahir</td><td></td><td align="right"><input type="text" name="tgl" class="form-control" value="<?php echo $user['tanggal_lahir'] ?>" /></td></tr>
      <tr><td align="left"></td><td></td><td align="left"><button type="submit" class="btn btn-primary">Ubah Profil</button</td></tr>
    </table>
</form>  
<br>
  <div class="card-footer text-muted">
  

                                    
  <div>
</div>
</div>
</div>
</div>
</div>
  