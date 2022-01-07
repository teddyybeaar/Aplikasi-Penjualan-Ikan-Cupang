<?php
// Session 
if($this->session->flashdata('sukses')) { 
	echo '<div class="alert alert-success" style="text-align:center">';
	echo $this->session->flashdata('sukses');
	echo '</div>';
} 
// Error
echo validation_errors('<div class="alert alert-success">','</div>'); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

  <title>PatriotBetta</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/bootstrap.css" />
  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="<?php echo base_url()?>assets/css/font-awesome.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/dataTables.bootstrap.min.css">
  <!-- Custom styles for this template -->
  <link href="<?php echo base_url()?>assets/css/user/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="<?php echo base_url()?>assets/css/responsive.css" rel="stylesheet" />

</head>
    
<body class="sub_page">
  
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>
              PatriotBetta
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url()?>home">Home </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url()?>produk"> Produk </a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url()?>about"> Tentang Kami <span class="sr-only">(current)</span> </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url()?>kontak">Kontak</a>
              </li>
            </ul>
            <div class="user_option-box">
            <div class="dropleft">
            <button class="btn btn-outline-default" id="dropdownMenuButton" data-toggle="dropdown"  type="button"><i class="fa fa-search" aria-hidden="true"></i></button>            
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <form method="get" action="<?php echo base_url()?>home/search">
            <input type="text" name="cari" placeholder="Search..."> </input>
</form>
          </div>
          </div>
            <a href="#">
                <?php
                if($this->session->userdata('user')['username']){
                 ?>
                <div class="user-area dropdown float-right">
                        <a href="#"  data-toggle="dropdown"  >
                        <button type="button" class="btn btn-default"  ><i class="fa fa-user"></i></button>
                        </a>

                        <div class="user-menu dropdown-menu">

                            <a class="nav-link" href="<?php echo base_url('user/profil')?>"><i class="fa fa-bell-o"></i> Profil</a>

                            <a class="nav-link" href="<?php echo base_url('user/pembelian')?>"><i class="fa fa-cog"></i> Pesanan</a>

                            <a class="nav-link" href="<?php echo base_url('login/logout')?>"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>
                <?php }else{ ?>
                  <button type="button" class="btn btn-default" data-toggle="modal" data-target="#login"  ><i class="fa fa-sign-in"></i></button>
                  
                  <?php } ?>
              </a>
              
              <!-- Modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
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
      <form method="post" action="<?php echo base_url('login')?>" class="form-horizontal">  
            <div class="modal-body form">
                 <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Username</label>
                            <div class="col-md-9">
                                <input name="username" placeholder="Username" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Password</label>
                            <div class="col-md-9">
                                <input name="password" placeholder="Password" class="form-control" type="password">
                                <span class="help-block"></span>
                            </div>
                        </div>  
                    </div>
                    <a>Belum punya akun? Klik<a href="<?php echo base_url()?>user/register">disni</a></a>
            </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" name="submit" value="Login" class="btn btn-primary">
      </div>
    </div>
  </div>
</div>
</form>


              <?php 
				$a = 0;
				if ($cart = $this->cart->contents())
				{		
				$i = 1;
					foreach ($cart as $item)
						{
							$i= $i++;
							$a+= $i;
					 }}
            ?>
              <a href="<?php echo base_url()?>shop/cart"><i class="fa fa-cart-plus"></i> </a>
              <span class="count bg-default">(<?php echo $a ?>)</span>
              
            </div>
          </div>
        </nav>
      </div>
          
    </header>
    <!-- end header section -->
  </div>