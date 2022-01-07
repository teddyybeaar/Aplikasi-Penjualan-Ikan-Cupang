
    <body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo base_url('home') ?>">PatriotBetta</a>
        </div>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar">qqq</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        

        <ul class="nav navbar-right navbar-top-links">
            <li class="dropdown navbar-inverse">
                
                
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> <?php echo $this->session->userdata('admin')['username']?> <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="<?php echo base_url()?>admin/user/profil"><i class="fa fa-gear fa-fw"></i> Profil</a>
                    
                    <li class="divider"></li>
                    <li><a href="<?php echo base_url()?>admin/login/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    
                    <li>
                        <a href="<?php echo base_url()?>admin/home" class=""><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    
                    <li>
                        <a href="#"><i class="fa fa-users fa-fw"></i> User <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url()?>admin/user/user"><i class="fa fa-user fa-fw"></i>User</a>
                            </li>
                            <?php if( $this->session->userdata('admin')['level'] == '0'){ ?>
                            <li>
                                <a href="<?php echo base_url()?>admin/user/admin"><i class="fa fa-user fa-fw"></i>Admin</a>
                            </li>
                            <?php } ?>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <?php if( $this->session->userdata('admin')['level'] != '0'){ ?>
                    <li>
                        <a href="<?php echo base_url()?>admin/produk"><i class="fa fa-shopping-basket fa-fw"></i> Produk </a>
                    </li>
                    <?php } ?>
                    <li>
                        <a href="#"><i class="fa fa-exchange fa-fw"></i> Transaksi <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                        <?php if( $this->session->userdata('admin')['level'] != '0'){ ?>
                            <li>
                                <a href="<?php echo base_url()?>admin/transaksi/list"><i class="fa fa-check-square-o fa-fw"></i>Verifikasi</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url()?>admin/transaksi/pengembalian"><i class="fa fa-rotate-left fa-fw"></i>Pengembalian</a>
                            </li>
                            <?php } ?>
                            <li>
                                <a href="<?php echo base_url()?>admin/transaksi/sukses"><i class="fa fa-check fa-fw"></i>Selesai</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <?php if( $this->session->userdata('admin')['level'] != '0'){ ?>
                    <li>
                        <a href="<?php echo base_url()?>admin/kontak"><i class="fa fa-envelope fa-fw"></i> Kontak </a>
                    </li>
                    <?php } ?>
                    
                    
                </ul>
            </div>
        </div>
    </nav>