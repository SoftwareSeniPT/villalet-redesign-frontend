<?php include("./header-simplified.php") ?>
  <div id="content" class="check-availability">
    <div class="container">
      <section class="availability-box page-box">
        <h2>Check Availability</h2>
        <div class="row">
          <div class="col-md-7">
            <div class="image">
              <img src="./images/availability-image-placeholder.png" alt="">
            </div>
            <div class="count">
              <i class="icon-bed"></i> <span>3</span>
              <i class="icon-bath"></i> <span>4</span>
            </div>            
            <ul class="features">
              <li>Direct booking with the property manager</li>
              <li>Best price guarantee</li>
              <li>Secure payment via credit card</li>              
            </ul>
          </div>
          <div class="col-md-5">
            <h3 class="villa-name">Villalet Villa</h3>
            <div class="title-label">Please choose departure and arrival date and number of guest.</div>
            
            <!-- Form -->
            <form action=""> 
              <div class="row">
                <!-- Checkin & checkout -->
                <div class="col-md-6">
                  <label for="checkin">Checkin</label>
                  <input type="text" name="checkin" class="form-control arrivaldate" position="top" placeholder="dd/mm/yy" />
                </div>
                <div class="col-md-6">
                  <label for="checkout">Checkout</label>
                  <input type="text" name="checkout" class="form-control departuredate" position="top" placeholder="dd/mm/yy" />                
                </div>

                <!-- Adult -->
                <div class="col-md-4">
                  <label for="adult">Adult</label>
                  <select name="adult" class="form-control">
                    <option value="1">1</option>
                    <option value="2" selected="">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </div>

                <!-- Child -->
                <div class="col-md-4">
                  <label for="child">Child</label>
                  <select name="child" class="form-control">
                    <option value="1">1</option>
                    <option value="2" selected="">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>                  
                </div>

                <!-- Infant -->
                <div class="col-md-4">
                  <label for="infant">Infant</label>
                  <select name="infant" class="form-control">
                    <option value="1">1</option>
                    <option value="2" selected="">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>                  
                </div>

                <!-- Firmdate checkbox -->
                <div class="col-md-12">
                  <div class="checkbox">
                      <input id="checkbox-bedroom-2" type="checkbox" />
                      <label for="checkbox-bedroom-2">I don't have firms date</label>
                   </div>                 
                </div>

                
                <!-- Rates Container -->
                <div class="col-md-12">
                  <div id="rates-container">
                    <div id="avail-status" class="availability-status">2 nights minimum stay required.</div>
                    <div class="availability">
                      <div class="average-price">
                        <p class="per-night">per night</p>
                        <p class="price" id="avail-price-per-night">Rp4.275.223,33</p>
                        <p>Average per night including all taxes and fees</p>
                      </div>
                      <div class="customer-nights-of-stay">
                        <span id="avail-totalnights">1 NIGHT OF STAY</span>
                        <!-- rates detail -->
                        <ul class="availability-rate" id="avail-detail-1" style="display: block;">
                          <li>
                            <p><label class="option">Low Season for 1 night</label><span class="price">Rp4.275.223,33</span></p><div class="clearboth"></div>
                          </li>
                          <li>
                            <p><label class="option">Government tax and service 0.0 %</label><span class="price">Rp0,00</span></p><div class="clearboth"></div>
                          </li>
                          <li>
                            <p><label class="option">Inclusions: Welcome drink, welcome fruit, daily breakfast, complimentary 1x airport transfer, free wifi.</label></p><div class="clearboth"></div>
                          </li>
                        </ul>        
                        <!-- end rates detail -->
                      </div>
                      <div class="price-total" id="avail-total-1" style="display: block;">TOTAL: Rp4.275.223,33</div>
                    </div>
                  </div>
                  <ul class="form-reservation shown-success" style="display: block;">
                    <li id="enquiry-message-container" style="display: none;">
                        <div class="alert" id="enquiry-message"></div>
                    </li>
                    <li>
                        <label>Your name<span class="required" aria-required="true">*</span></label>
                        <div class="wrap-input">
                            <span class="first-name">
                                <input type="text" name="visitor_first_name" id="visitor-first-name" placeholder="First Name" value="" style="cursor: pointer; background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; background-repeat: no-repeat;">
                            </span>
                            <span class="last-name">
                                <input type="text" name="visitor_last_name" id="visitor-last-name" placeholder="Last Name" value="">
                            </span>
                        </div>
                    </li>
                    <li>
                        <label>Email<span class="required" aria-required="true">*</span></label>
                        <div class="wrap-input">
                            <input type="text" name="visitor_email" id="visitor-email" placeholder="email@address.com" value="">
                            <div class="email-error error" style="display:none">Please enter email</div>
                        </div>
                    </li>
                    <li>
                        <label>Phone<span class="required" aria-required="true">*</span></label>
                        <div class="wrap-input">
                            <input type="text" name="visitor_phone" id="visitor-phone" placeholder="Phone number" value="">
                        </div>
                    </li>
                    <li class="note-li">
                        <label>Note</label>
                        <div class="wrap-input">
                            <textarea name="visitor_message" rows="4" id="visitor-message" placeholder="Please enter your request or question"></textarea>
                        </div>
                    </li>
                    <li>
                        <div class="wrap-input agree-text">
                            <input type="checkbox" name="terms_conditions" id="terms-conditions" value="0"> I agree to the <a href="http://staging.balion.com/terms-and-conditions/" target="_blank">terms and conditions</a>.
                            <br>
                            <br>
                        </div>
                    </li>
                    <li class="button-request">
                        <label>
                            <p><a href="skype:balion.bali?call">To talk to our staff (Skype)</a></p>
                            <p><a href="#" id="btn-send-enquiry">To send us an email (Email)</a></p>
                        </label>
                        <input type="button" id="btn-book-now" value="Book Now" class="button booknow-disabled">
                    </li>
                  </ul>
                </div>
                 

                <!-- First name and last name -->
                <div class="col-md-6">
                  <label for="first-name">First Name</label>
                  <input type="text" name="first-name" class="form-control" placeholder="First Name" />
                </div>
                <div class="col-md-6">
                  <label for="last-name"></label>
                  <input type="text" name="last-name" class="form-control" placeholder="Last Name" />                  
                </div>

                <!-- Your Email -->
                <div class="col-md-12">
                  <label for="email">Email</label>
                  <input type="text" name="email" class="form-control" placeholder="Email" />                  
                </div>
                
                <!-- Buttons -->
                <div class="buttons">
                  <div class="col-md-7">
                    <button class="button request-info">Request Information</button>
                  </div>
                  <div class="col-md-5">
                    <button class="button enquire-now">Enquire Now</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </section>
    </div>
  </div>
<?php include("./footer-simplified.php") ?>  
