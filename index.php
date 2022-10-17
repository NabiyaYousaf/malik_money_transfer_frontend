<?php
include('connection.php');
include('header.php');
?>


<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
  <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
    <h1>Welcome to <br><span style="color:#ff0000;"> Malik Money Transfer </span></h1>
    <h2>We help people and businesses move money for better—better communities, better economies, and a better world.</h2>
    <a href="#about" class="btn-get-started scrollto">Get Started</a>
  </div>
</section><!-- End Hero -->

<main id="main">

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container">

      <div class="row">
        <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left">
          <img src="assets/img/about.webp" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content ml-5" data-aos="fade-right">
          <h3>About Us.</h3>
          <p class="fst-italic lh-lg">
            With a global population of over seven billion people, it is no surprise that we have to look for ways to send money from one location to another. Many people need assistance with sending money home to their families or friends who live in a different countries. There are also tourists who would like to spend the money they saved on their vacation someplace else other than at home.
            Money transfer services can be beneficial in these situations and others like them. If you need to send money from one location to another, Malik Money Transfer offers various money transaction services available and how you can get started today.
          </p>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->


  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container">

      <div class="section-title">
        <span>Services</span>
        <h2>Services</h2>
        <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up">
          <div class="icon-box">
            <div class="icon">
              <i class="bi bi-currency-pound"></i>
            </div>
            <h4><a href="">Money Transfer everywhere in the world</a></h4>
            <!-- <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p> -->
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="150">
          <div class="icon-box">
            <div class="icon">
              <i class="bx bx-file"></i>
            </div>
            <h4><a href="">Printing documents </a></h4>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-qr-code-scan"></i></div>
            <h4><a href="">Scanning documents </a></h4>
            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="450">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-card-checklist"></i></div>
            <h4><a href="">Applying for Pakistan ID Card</a></h4>
            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="600">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-person-badge-fill"></i></div>
            <h4><a href="">Applying for Pakistan Passport</a></h4>
            <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="750">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-file-earmark"></i></div>
            <h4><a href="">Visa applications</a></h4>
            <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Services Section -->

  <!-- ======= Pricing Section ======= -->
  <section id="pricing" class="pricing">
    <div class="container">

      <div class="section-title">
        <span>Pricing</span>
        <h2>Pricing</h2>
      </div>
      <div class="row">
        <div class="col-md-8 mx-auto">
          <table class="table table-striped table-hover">
            <thead class="table-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Country</th>
                <th scope="col">Pound Rate</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $select_query = mysqli_query($conn, "SELECT * FROM `currency` limit 4");
              if ($select_query) {
                while ($row = mysqli_fetch_assoc($select_query)) {
              ?>
                  <tr>
                    <td scope="row"><?php echo $row['id']; ?></td>
                    <td><?php echo $row['country']; ?></td>
                    <td><?php echo $row['rate']; ?></td>
                  </tr>
              <?php

                }
              }


              ?>

            </tbody>
          </table>
          <center>
          <div>
            <a href="price.php" class="btn btn-dark">Show More</a>
          </div>
          </center>
        </div>
      </div>



    </div>
  </section><!-- End Pricing Section -->


  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <span>Contact</span>
        <h2>Contact</h2>
        <p>Contact us to solve your queries</p>
      </div>

      <div class="row" data-aos="fade-up">
        <div class="col-lg-6">
          <div class="info-box mb-4">
            <i class="bx bx-map"></i>
            <h3>Our Address</h3>
            <p>177 Plashet Rd, London E13 0QZ</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-box  mb-4">
            <i class="bx bx-envelope"></i>
            <h3>Email Us</h3>
            <p>fabtraders786@gmail.com</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-box  mb-4">
            <i class="bx bx-phone-call"></i>
            <h3>Call Us</h3>
            <p>+020 8127 1220</p>
          </div>
        </div>

      </div>

      <div class="row" data-aos="fade-up">

        <div class="col-lg-6 ">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2481.6684874780026!2d0.028560015172751342!3d51.537640016313645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a7b8c12bedab%3A0xd9cbda6a384fbe2f!2s177%20Plashet%20Rd%2C%20London%2C%20UK!5e0!3m2!1sen!2s!4v1665144174823!5m2!1sen!2s" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          <!-- <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe> -->
        </div>

        <div class="col-lg-6">
          <form method="post">
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
                <!-- <div class="loading">Loading</div> -->
                <div class="error-message"></div>
                <!-- <div class="sent-message">Your message has been sent. Thank you!</div> -->
              </div>
            <div class="text-center"><button type="submit" name="sendmail" class="btn" style="background-color: #ff0000; color:#ffff;">Send Message</button></div>
          </form>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->

<?php
include('footer.php');

if(isset($_POST['sendmail'])){ 
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    $subject=$_POST['subject'];
    $rcvrEmail='nabiya.yousaf10@gmail.com';
      
    $to_email =$rcvrEmail;
     
            $subject=$subject;
            $body=$message;
            $header="From: $email";

            $send=mail($to_email, $subject, $body, $header);
            if( $send == true ) {
              echo "<script>alert('Message sent successfully...')</script>";
           }else {
              echo "Message could not be sent...";
           }
}
?>