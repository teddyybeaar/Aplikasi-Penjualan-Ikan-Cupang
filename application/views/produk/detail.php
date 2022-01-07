<!-- contact section -->

<section class="contact_section layout_padding">
    <div class="container">
        
      <div class="row">
        <div class="col-md-6">
          <div class="form_container">
            <div class="heading_container">
              
            </div>
            <div class="img-box">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="" src="<?php echo base_url('assets/upload/produk/'.$produk['foto']) ?>" alt="First slide">
    </div>
    <div class="carousel-item">
    <div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="<?php echo $produk['vid'] ?>" allowfullscreen></iframe>
</div>
    </div>
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
            
          </div>
        </div>
        <div class="col-md-6">
          
          <form action="<?php echo base_url()?>shop/beli" method="post">
          <input type="hidden" name="id" value="<?php echo $produk['id_produk'] ?>" />
                  <input type="hidden" name="gambar" value="<?php echo $produk['foto'] ?>" />
                  <input type="hidden" name="qty" value="1" />
                  <input type="hidden" name="nama" value="<?php echo $produk['nama'] ?>" />
                  <input type="hidden" name="harga" value="<?php echo $produk['harga'] ?>" />
              <div>
                  <label>Nama :</label>
                <p> <?php echo $produk['nama'] ?> </p>
              </div><hr>
              <div>
              <label>Deskripsi : </label>
              <p> <?php echo $produk['deskripsi'] ?> </p>
              </div><hr>
              <div>
              <label>Harga :</label>
              <p> <?php echo $produk['harga'] ?> </p>
              </div><hr>
              <div>
              <label>Stok : <?php echo $produk['stok'] ?></label>
              </div>
              <div>
              <label>Rating : <?php echo $rating['total'] ?>/5</label>
              </div>
              <div>
              <?php if(($this->session->userdata('user')['id_user'])){?>
                <?php if(($this->session->userdata('user')['status'] == '0')){ ?>
	<a onclick="myFunction()" style="color:white" class="btn btn-lg btn-warning"><i class="fa fa-cart-plus"></i> Beli </a>
  <?php }elseif(($this->session->userdata('user')['status'] == '1')) {?>
	<button type="submit" class="btn btn-lg btn-primary"><i class="fa fa-cart-plus"></i> Beli </button>
  <?php }}else{ ?>
    <button type="button" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#login"  ><i class="fa fa-cart-plus"></i> Beli </button>
  <?php }?>
  </form>
            <script>
function myFunction() {
    alert("verifkasi email terlebih dahulu");
}
</script>
        </div>
        
      </div>
      
    </div> <br>
    <div class="card">
  <h5 class="card-header">Review</h5>
  <div class="card-body">
    
    <div  style="overflow-y: scroll; height:500px; width: auto;">
    <?php 
    if($review->result() != NULL){
    foreach($review->result() as $a){ ?>
    <hr>
    <p class="card-title">Tanggal : <?php echo $a->tanggal ?></p>
    <p class="card-title">Rating : <?php echo $a->rating ?></p>
    <p class="card-title">Review : <?php echo $a->review ?></p>
    <p class="card-title">pengirim : <?php echo $a->nama ?></p>
<hr>
<?php } ?>
<?php }else{ ?>
    <h1 class="card-title" style="text-align:center">BELUM ADA REVIEW</h1>
  <?php } ?>
  </div>
  <hr>
  <form method="post" action="<?php echo base_url('produk/review/'.$produk['id_produk'])?>">
  <div class="row">
    <div class="col-lg-12">
  <div class="form-group col-md-4">
    <label >Rating</label>
    <select name="rating" class="form-control" >
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>
</div>
  <div class="form-group col-md-7">
    <label>Review</label>
    <textarea type="textarea" name="review" class="form-control"  placeholder="Tulis Review..."></textarea>
    <?php if($this->session->userdata('user')['id_user']){ ?>
    <button type="submit" class="btn btn-primary">Submit</button>
  <? }else{ ?>
    <button type="button" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#login"  > Submit </button>
    <?php } ?>
  </div>
  
</div>

</div>
  </div>
  </form>
</div>
  </section>

  <!-- end contact section -->