<?php
include('connection.php');
include('head.php');
?>
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
              $select_query = mysqli_query($conn, "SELECT * FROM `currency`");
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
        </div>
      </div>



    </div>
  </section><!-- End Pricing Section -->
<?php
include('footer.php');
?>