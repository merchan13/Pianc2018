<?php include 'head.php'; ?>
<body>
  <div id="fh5co-wrapper">
    <div id="fh5co-page">
      <?php include 'headerNav.php'; ?>
      <div id="fh5co-team-section">
        <div class="container">
          <div class="row about">
            <div class="col-md-12 animate-box">
              <h2 id="testimonials-title">AGA Program</h2>
              <br>
              <img src="images/aga_schedule.jpg" alt="" class="img-responsive" style="margin: 0 auto">
            </div>
          </div>
        </div>

        <div class="container">
          <div class="row about">
            <div class="col-md-12 animate-box" style="text-align: center">
              <h2>If you are an AGA Member please request your registration link to us!</h2>
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
