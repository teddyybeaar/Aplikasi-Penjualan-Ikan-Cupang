<!-- contact section -->

<section class="contact_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="form_container">
            <div class="heading_container">
              <h2>
                Contact Us
              </h2>
              <?php
// Session 
if($this->session->flashdata('sukses')) { 
	echo '<div class="alert alert-info">';
	echo $this->session->flashdata('sukses');
	echo '</div>';
} 
// Error
echo validation_errors('<div class="alert alert-info">','</div>'); 
?>
            </div>
            <form action="<?php echo base_url()?>kontak/input" method="post">
              <div>
                <input type="text" name="name" placeholder="Full Name " />
              </div>
              <div>
                <input type="email" name="email" placeholder="Email" />
              </div>
              <div>
                <input type="text" name="pesan" class="message-box" placeholder="Message" />
              </div>
              <div class="d-flex ">
                <button type="submit">
                  SEND
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

  <!-- end contact section -->