<?php include 'head.php'; ?>
<body>
  <div id="fh5co-wrapper">
    <div id="fh5co-page">
      <?php include 'headerNav.php'; ?>
      <div id="fh5co-programs-section">
        <div class="container">
          <p id="contactus-title">Contact the PIANC Team</p>
          <p>
            <b>Local Office of the 34th PIANC World Congress 2018</b><br>
            <a href="mailto:congress2018@pancanal.com?subject=PIANC">Congress2018@pancanal.com</a><br>
            TEL.: (507)272-2900, 272-2929
          </p>
          <p id="testimonials-title">PIANC Team</p>

          <div class="row text-center">
            <div class="col-md-6 col-sm-6">
              <div class="program animate-box">
                <img src="images/contactUs/SabineVandeVelde.jpg" alt="Cycling" height="240" class="img-circle pull-left">
                <div class="pull-left" style="text-align:left; margin-left: 1rem; margin-top:20px; line-height:5px;">
                  <p ><strong>Sabine Van de Velde</strong></p>
                  <p><a href="mailto:sabine.vandevelde@pianc.org?subject=PIANC2018">sabine.vandevelde@pianc.org</a></p>
                  <p>Pianc Representative </p>
                  <p>or <a href="mailto:info@pianc.org?subject=PIANC2018">info@pianc.org</a></p>
                  <p>Tel: +32 2 553 71 61</p>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-sm-6">
              <div class="program animate-box">
                <img src="images/contactUs/LeenWeltens.jpg" alt="Cycling" class="img-circle pull-left">
                <div class="pull-left" style="text-align:left; margin-left: 1rem; margin-top:20px; line-height:5px;">
                  <p><strong>Leen Weltens</strong></p>
                  <p>Pianc Representative </p>
                  <p><a href="mailto:leen.weltens@pianc.org?subject=PIANC2018">leen.weltens@pianc.org</a></p>
                  <p>or <a href="mailto:info@pianc.org?subject=PIANC2018">info@pianc.org</a></p>
                  <p>Tel: +32 2 553 71 57</p>
                </div>
              </div>
            </div>
          </div>

          <div class="row text-center">
            <div class="col-md-6 col-sm-6">
              <div class="program animate-box">
                <img src="images/contactUs/AnVanSchel.jpg" alt="Cycling" class="img-circle pull-left">
                <div class="pull-left" style="text-align:left; margin-left: 1rem; margin-top:20px; line-height:5px;">
                  <p><strong>An Van Schel</strong></p>
                  <p>Pianc Representative </p>
                  <p><a href="mailto:an.vanschel@pianc.org?subject=PIANC2018">an.vanschel@pianc.org</a></p>
                  <p><a href="mailto:info@pianc.org?subject=PIANC2018">info@pianc.org</a></p>
                  <p>Tel: +32 2 553 71 58</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <section id="contact" style="background-color: #00adef;">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center" style="margin-top:2rem;">
              <h2 class="" style="color:white;">Contact Us!</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <form name="sentMessage" id="contactForm" novalidate>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Your name*" id="name" required data-validation-required-message="Please enter your name.">
                      <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control" placeholder="Your e-mail *" id="email" required data-validation-required-message="Please enter your email address.">
                      <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group">
                      <input type="tel" class="form-control" placeholder="Your phone number *" id="phone" required data-validation-required-message="Please enter your phone number.">
                      <p class="help-block text-danger"></p>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <textarea class="form-control" placeholder="Your message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                      <p class="help-block text-danger"></p>
                    </div>
                  </div>

                  <div class="clearfix"></div>

                  <div class="col-lg-12 text-center">
                    <div id="success"></div>
                    <button type="submit" class="btn btn-xl">Send Message</button>
                  </div>
                </div>
              </form>
            </div>
          </div>

          <div class="row">
            <ul class="list-inline social-buttons">
              <li></li>
            </ul>
          </div>
        </div>
      </section>

      <br><br>

      <?php include 'footer.php'; ?>
    </div>
    <!-- END fh5co-page -->
  </div>
  <!-- END fh5co-wrapper -->

  <!-- jQuery -->
  <script src="js/jquery.min.js"></script>
  <!-- jQuery Easing -->
  <script src="js/jquery.easing.1.3.js"></script>
  <!-- Bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- Waypoints -->
  <script src="js/jquery.waypoints.min.js"></script>
  <!-- Stellar -->
  <script src="js/jquery.stellar.min.js"></script>
  <!-- Superfish -->
  <script src="js/hoverIntent.js"></script>
  <script src="js/superfish.js"></script>

  <!-- Main JS (Do not remove) -->
  <script src="js/main.js"></script>

  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <?php include 'linkedin.php'; ?>
</body>

</html>
