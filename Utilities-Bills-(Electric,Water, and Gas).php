<?php
include 'header.php';
?>
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/page-header.jpg');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Utilities Bills (Electric,Water, and Gas)</h2>
              <p>EasyTrans Connecting Your Heart.</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Services</li>            
            <li>Utilities Bills (Electric,Water, and Gas)</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="col-lg-6 content order-last  order-lg-first">
            <h3>Utilities Bills (Electric,Water, and Gas)</h3>
                      </div>
                     <p>
                       Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book
                     </p> 
                   
        <div class="row gy-4 mt-4">
  <h4>Please Fill Form and Deposit Amount in Given Accounts</h4>
          <div class="col-lg-4">

            <div class="info-item d-flex">
              <i class="bi bi-cash flex-shrink-0"></i>
              <div>
                <h4>EasyPaisa:</h4>
                <p>xxxxxxxxx</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-phone flex-shrink-0"></i>
              <div>
                <h4>JazzCash:</h4>
                <p>xxxxxxxxxx</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-bank flex-shrink-0"></i>
              <div>
                <h4>Bank Account:</h4>
                <p>xxxxxxxxxx</p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
        <?php include 'converter.php'?>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <?php
include 'footer.php';
?>