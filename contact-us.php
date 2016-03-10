<?php include("./header.php") ?>
  <div id="content" class="contact-us">
    <div class="container">
      <section class="contact-us-box page-box">
        <h2>Contact Us</h2>

        <!-- Detail grid -->
        <section class="detail-grid">
          <div class="row">
            <div class="col-md-4">
              <div class="detail-wrapper">
                <i class="icon-map-pin"></i>
                <h5>Address</h5>
                <h6>Sydney Office</h6>
                <p>Suite 65, 61 Marlborough St, 
                Surry Hills NSW 2010, Australia</p>
              </div>
            </div>         

            <div class="col-md-4">
              <div class="detail-wrapper">
                <i class="icon-envelope"></i>
                <h5>Email</h5>
                <p>support@villalet.com</p>
              </div>
            </div>       

            <div class="col-md-4">
              <div class="detail-wrapper">
                <i class="icon-phone"></i>
                <h5>Phone</h5>
                <p>+61 (0)2 8039 6888</p>
              </div>
            </div>
          </div>
        </section>

        <!-- Contact text -->
        <section class="contact-text">If you have any questions about a particular villa, a booking you have made, or about our services, please use the form on this page. We respond promptly to all enquiries.</section>

        <!-- Contact form -->
        <section class="contact-form">
          <div class="row">

            <!-- Form detail -->
            <div class="col-md-1">
              <select name="title" class="form-control title">
                <option value="#">Mr</option>
                <option value="#">Mrs</option>
              </select>              
            </div>
            <div class="col-md-11">
              <div class="row">
                <div class="col-md-4">
                  <div class="input-wrapper name">
                    <input type="text" class="form-control" placeholder="Your Name">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="input-wrapper email">
                    <input type="text" class="form-control" placeholder="Your Email">
                  </div>
                </div>
                <div class="col-md-4">
                  <select name="subject" class="form-control subject">
                    <option value="#">Subject 1</option>
                    <option value="#">Subject 2</option>
                    <option value="#">Subject 3</option>
                    <option value="#">Subject 4</option>
                  </select>
                </div>
              </div>
            </div>

            <!-- Comment -->
            <div class="col-md-12">
              <textarea name="" cols="30" rows="10" class="form-control comment" placeholder="Comment"></textarea>
            </div>

            <!-- Button -->
            <div class="col-md-12">
              <button class="button">Submit</button>
            </div>
          </div>
        </section>
      </section>
    </div>   

    <!-- Map -->
    <div class="search-map-wrapper">
      <div class="search-map"></div>
    </div>
  </div>
<?php include("./footer.php") ?> 
