<?php include 'head.php'; ?>
<body>
  <div id="fh5co-wrapper">
    <div id="fh5co-page">
      <?php include 'headerNav.php'; ?>

      <div id="fh5co-team-section">
        <div class="container">
          <div class="row about">
            <div layout="column" layout-alighment="center center">
              <div layout="column" layout-gt-xs="row" layout-align-gt-sm="start center" flex="nogrow">
                <h1 layout="row" layout-align="start center" layout-align-xs="space-between center" class="ph-16" flex="20">
                  <div>
                    <md-icon md-font-icon="icon-pen"></md-icon>
                    <h2>Exhibiting Enquiry Form</h2>
                  </div>
                </h1>
              </div>

              <div>
                <p>If you would like to express an interest in exhibiting at PIANC please complete this form and a member of the sales team will be in touch to respond to your enquiry.</p>
                <p>Completion of this form does not mean you have booked a booth, this is just an enquiry</p>
              </div>

              <div class="col-md-10 animate-box">
                <form name="sentMessage" id="contactForm" novalidate>
                  <div class="row">
                    <div class="col-md-7">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name *" id="name" required data-validation-required-message="Please enter your name.">
                        <p class="help-block text-danger"></p>
                      </div>
                      <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email *" id="email" required data-validation-required-message="Please enter your email address.">
                        <p class="help-block text-danger"></p>
                      </div>
                      <div class="form-group">
                        <input type="tel" class="form-control" placeholder="Phone number *" id="phone" required data-validation-required-message="Please enter your phone number.">
                        <p class="help-block text-danger"></p>
                      </div>
                    </div>
                    <div class="col-md-7">
                      <div class="form-group">
                        <textarea class="form-control" placeholder="Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                        <p class="help-block text-danger"></p>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-lg-12">
                      <div id="success"></div>
                      <button type="submit" class="btn btn-xl registration-btn">Send Message</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

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
