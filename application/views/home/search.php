<!-- shop section -->

<section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
          <?php if($a){ ?>
        
        <h2>
          Hasil Pencarian <?php  ?>
        </h2>
      </div>
      <div class="row">
      <?php foreach($a as $a){ ?>
      
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
        <?php }}else{ ?>
      </div>
      <h2> Maaf Hasil Pencarian Tidak Ditemukan! </h2>
      <?php } ?>
      </div>
    </div>
  </section>
  <script>
function myFunction() {
    alert("Stok Habis");
}
</script>
  <!-- end shop section -->