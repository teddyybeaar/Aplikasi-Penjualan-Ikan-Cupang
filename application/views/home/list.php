<!-- slider section -->
<section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container-fluid ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                      Ikan Cupang Berkualitas
                    </h1>
                    <p>
                      Dapatkan Ikan Cupang Berkualitas Dengan Berbelanja di PatriotBetta!
                    </p>
                    <div class="btn-box">
                      <a href="<?php echo base_url() ?>produk" class="btn1">
                        Beli Sekarang
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="<?php echo base_url() ?>assets/upload/produk/b1.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container-fluid ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                      100% Aman
                    </h1>
                    <p>
                      100% Aman Berbelanja di PatriotBetta, Jaminan Sampai Tujuan!
                    </p>
                    <div class="btn-box">
                      <a href="<?php echo base_url() ?>produk" class="btn1">
                        Beli Sekarang
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="<?php echo base_url() ?>assets/upload/produk/b4.png" height="500" >
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container-fluid ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                      100% Gratis Ongkir
                    </h1>
                    <p>
                      100% Gratis Ongkir Ke Seluruh Indonesia!
                    </p>
                    <div class="btn-box">
                      <a href="<?php echo base_url() ?>produk" class="btn1">
                        Beli Sekarang
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="<?php echo base_url() ?>assets/upload/produk/b5.png" height="500" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <ol class="carousel-indicators">
          <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
          <li data-target="#customCarousel1" data-slide-to="1"></li>
          <li data-target="#customCarousel1" data-slide-to="2"></li>
        </ol>
      </div>

    </section>
    <!-- end slider section -->
  </div>

  <!-- shop section -->

  <section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Produk Terbaru
        </h2>
      </div>
      <div class="row">
      <?php 
      if(!empty($produk)){
      foreach($produk->result() as  $a){
          ?>
      
        <div class="col-sm-6 col-xl-3">
          <div class="box">
            <a href="<?php echo base_url('produk/detail/'.$a->id_produk)?>">
              <div class="img-box">
                <img src="<?php echo base_url('assets/upload/produk/'.$a->foto)?>" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  <?php echo $a->nama; ?>
                </h6>
                <h6>
                  Price:
                  <span>
                    Rp. <?php echo $a->harga; ?>
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  Feature
                </span>
              </div>
            </a>
          </div>
        </div>
        <?php }} ?>
      </div>
        
      <div class="btn-box">
        <a href="<?php echo base_url() ?>produk">
          Beli Sekarang
        </a>
      </div>
    </div>
  </section>

  <!-- end shop section -->

  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container  ">
      <div class="row">
        <div class="col-md-6 col-lg-5 ">
          <div class="img-box">
            <img src="<?php echo base_url() ?>assets/upload/produk/b2.png" alt="">
          </div>
        </div>
        <div class="col-md-6 col-lg-7">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                Tentang Kami
              </h2>
            </div>
            <p>
            Kami adalah pengusaha UMKM yang berusaha bertahan mencari penghasilan dengan menjual ikan cupang.
              Kami menjual ikan cupang di daerah kecamatan Ciampea kabupaten Bogor, silahkan...
            </p>
            <a href="<?php echo base_url() ?>about">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- feature section -->

  <section class="feature_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Fitur Web Kami
        </h2>
        <p>
          Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </p>
      </div>
      <div class="row">
        <div class="col-sm-6 col-lg-3">
          <div class="box">
            <div class="img-box">
              <img src="images/f1.png" alt="">
            </div>
            <i class="fa fa-check-square-o" aria-hidden="true"></i>
            <div class="detail-box">
              <h5>
                Ikan Berkualitas
              </h5>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
              </p>
              
                
              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="box">
            <div class="img-box">
              <img src="images/f2.png" alt="">
            </div>
            <i class="fa fa-shield"></i>
            <div class="detail-box">
              <h5>
                100% Aman
              </h5>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
              </p>
              
                
              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="box">
            <div class="img-box">
              <img src="images/f3.png" alt="">
            </div>
            <i class="fa fa-truck" aria-hidden="true"></i>
            <div class="detail-box">
              <h5>
                100% Gratis Ongkir
              </h5>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
              </p>
              
                
              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="box">
            <div class="img-box">
              <img src="images/f4.png" alt="">
            </div>
            <i class="fa fa-thumbs-up" aria-hidden="true"></i>
            <div class="detail-box">
              <h5>
                Proses Mudah Cepat
              </h5>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
              </p>
              
                
              </a>
            </div>
          </div>
        </div>
      </div>
      
      </div>
    </div>
  </section>
<br>

  <!-- end feature section -->

  <!-- contact section -->

  <section class="contact_section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="form_container">
            <div class="heading_container">
              <h2>
                Contact Us
              </h2>
            </div>
            <form action="<?php echo base_url() ?>kontak">
              <div>
                <input type="text" placeholder="Full Name " />
              </div>
              <div>
                <input type="email" placeholder="Email" />
              </div>
              <div>
                <input type="text" class="message-box" placeholder="Message" />
              </div>
              <div class="d-flex ">
                <button>
                  Kontak Kami
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            <img src="<?php echo base_url() ?>assets/upload/produk/b3.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
<br>
  <!-- end contact section -->

  