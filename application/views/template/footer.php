  <!-- ======= Footer ======= -->
  <footer class="footer" role="contentinfo">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-4 mb-md-0" style="color: black;">
          <h3>Contact Us</h3>
          <p><b>Address : </b><?php echo $company_data->address ?></p>
          <p><b>Phone : </b>
            <?php foreach (json_decode($company_data->phone) as  $value): ?>
              <?php if ($value != ''): ?>
                <?php echo $value->phone ?><br>
              <?php endif; ?>
            <?php endforeach; ?>
          </p>
          <p><b>Email : </b>
            <?php foreach (json_decode($company_data->email) as  $value): ?>
              <?php if ($value != ''): ?>
                <?php echo $value->email ?><br>
              <?php endif; ?>
            <?php endforeach; ?>
          </p>
          
        </div>
        <div class="col-md-7 ml-auto">
          <div class="row site-section pt-0">
            <div class="col-md-4 mb-4 mb-md-0">
              <h3>Navigation</h3>
              <ul class="list-unstyled">
                <li><a href="<?php echo base_url() ?>index.php/template">Home</a></li>
                <li><a href="<?php echo base_url() ?>index.php/template/about">About us</a></li>
                <li><a href="<?php echo base_url() ?>index.php/template/service">Services</a></li>
                <li><a href="<?php echo base_url() ?>index.php/template/service">Partners</a></li>
                <li><a href="<?php echo base_url() ?>index.php/template/contact">Contact us</a></li>
              </ul>
            </div>
            <div class="col-md-4 mb-4 mb-md-0">
              <h3>Services</h3>
              <ul class="list-unstyled">
                <li><a href="<?php echo base_url() ?>index.php/template/infra">IT Infrastructure</a></li>
                <li><a href="<?php echo base_url() ?>index.php/template/security" >IT Security</a></li>
                <li><a href="<?php echo base_url() ?>index.php/template/network">Networking Solutions</a></li>
                <li><a href="<?php echo base_url() ?>index.php/template/hardware" >Hardware</a></li>
                <li><a href="<?php echo base_url() ?>index.php/template/lowcurrent">Low Current</a></li>
              </ul>
            </div>
            <div class="col-md-4 mb-4 mb-md-0">
              <!-- <h3>Downloads</h3> -->
              <!-- <ul class="list-unstyled">
                <li><a href="#">Get from the App Store</a></li>
                <li><a href="#">Get from the Play Store</a></li>
              </ul> -->
              <img src="<?php echo base_url().'assets/upload/'.$company_data->company_logo ?>" class="img-fluid"  style="border-radius: 30px;" >
              <p class="social">
                <a href="#"><span class="icofont-twitter"></span></a>
                <a href="#"><span class="icofont-facebook"></span></a>
                <a href="#"><span class="icofont-dribbble"></span></a>
            <!-- <a href="#"><span class="icofont-behance"></span></a> -->
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="row justify-content-center text-center">
        <div class="col-md-7">
          <p class="copyright">&copy; Copyright Atstico. All Rights Reserved</p>
          <div class="credits">
            <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=SoftLand
          -->
            Designed by <a href="https://eptechno.com/" target="_blank">Eptechno.com</a>
          </div>
        </div>
      </div>

    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url() ?>assets/temp/assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assets/temp/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url() ?>assets/temp/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?php echo base_url() ?>assets/temp/assets/vendor/php-email-form/validate.js"></script>
  <script src="<?php echo base_url() ?>assets/temp/assets/vendor/aos/aos.js"></script>
  <script src="<?php echo base_url() ?>assets/temp/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="<?php echo base_url() ?>assets/temp/assets/vendor/jquery-sticky/jquery.sticky.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url() ?>assets/temp/assets/js/main.js"></script>


</body>

</html>