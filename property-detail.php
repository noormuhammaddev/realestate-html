<!DOCTYPE html>
<html lang="en-US">
  <!-- figma design: https://www.figma.com/file/jkkuHgZswnclyeA3bsU88T/Real-Estate-Final?node-id=1%3A2 -->
  <head>
    <title>Saved Properties</title>
    <?php include 'includes/header-includes.php'; ?>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  </head>
  <body>
    <!-- add header -->
      <?php include 'header.php'; ?>

    <!-- property detail page content -->
    <section class="property-detail">
      <div class="hero-slider-lg">
        <ul id="hero-carousel-lg" class="owl-carousel carousel">
          <li><img src="assets/images/hero-slider-img.jpg" alt="Hero image"/></li>
          <li><img src="assets/images/hero-slider-img.jpg" alt="Hero image"/></li>
          <li><img src="assets/images/hero-slider-img.jpg" alt="Hero image"/></li>
          <li><img src="assets/images/hero-slider-img.jpg" alt="Hero image"/></li>
          <li><img src="assets/images/hero-slider-img.jpg" alt="Hero image"/></li>
        </ul>

        <div class="sliders-counter">
          <span>View <number id="gallery_images">5</number> Photos</span>
        </div>
      </div>

      <!-- detail colums -->
      <div class="detail-container">
        <div class="container">
          <div class="property-short-info">
            <p>Home  |  Buy  |  High End Custom Built Spacious Living  Pool</p>
            <h1>High End | Custom Built | Spacious Living | Pool</h1>

            <div class="location-info">
              <span class="location">Jumeirah Island</span>
              <span class="tag">For Sale</span>
            </div>

            <div class="actions">
              <a href="#"><img src="assets/images/share.svg" alt="shares icon" title="Share" /></a>
              <a href="#"><img src="assets/images/heart-icon.svg" alt="shares icon" title="Save Property" /></a>
            </div>
          </div>

          <div class="row">
            <div class="col-md-8 col-sm-8 col-xs-12">
              <div class="features">
                <div class="item house-type">Villa</div>
                <div class="item beds">3 Beds</div>
                <div class="item baths">3 Baths</div>
                <div class="item area">2200 sqft</div>
              </div>

              <!-- amenities -->
              <div class="detail-section">
                <h3>Amenities</h3>
                <ul>
                  <li>Study Room</li>
                  <li>Central A/C & Heating</li>
                  <li>Concierge Service</li>
                  <li>Built in Wardrobes</li>
                  <li>Walk-in Closet</li>
                  <li>Private Garden</li>
                  <li>View of Landmark</li>
                  <li>Pets Allowed</li>
                  <li>Wifi</li>
                  <li>Shared Pool</li>
                  <li>Maid Service</li>
                  <li>Balcony</li>
                </ul>
              </div>

              <!-- location -->
              <div class="detail-section">
                <h3>Location</h3>
                <div class="map">
                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3320.5450300315465!2d72.99617706454374!3d33.66894883071183!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38df95ff25ef0ae9%3A0xd74faf85d90645e5!2sG-11%20Markaz%20G%2011%20Markaz%20G-11%2C%20Islamabad%2C%20Islamabad%20Capital%20Territory%2C%20Pakistan!5e0!3m2!1sen!2s!4v1584561311726!5m2!1sen!2s" width="100%" height="210" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

                </div>
              </div>

              <!-- description -->
              <div class="detail-section">
                  <h3>Description</h3>
                  <p>
                  Cool, calm and sophisticated with a youthful edge, this functional home is 
                  enveloped in light and comfort. The living is easy in this impressive, 
                  generously proportioned contemporary villa, with lush green views, located in a 
                  very quiet courtyard.</p>
                  <p>Approx BUA 5200 sqft</p>
                  <p>Approx Plot 6500 sqft</p>
                  <p>4 Bedrooms +Study +Family Area</p>
                  <p>Massive Basement with Sitting Area, Shower room and Gym
                    Spacious Living and Dining Area with a beautiful false ceiling with three layers of lighting
                    Modern Kitchen with Quality Appliances overlooking the very comfortable Family Area
                    Separate Office Space /Study on the ground floor
                  </p>
              </div>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="shaded-box">
                <h3 class="property-rate">1,00,000 AED ...</h3>
                <p class="estimated-note">Estimated Mort</p>

                <div class="btns">
                  <button class="btn btn-warning btn-lg width-left-icon mb-3">
                    <span><img src="assets/images/phone-white.svg" alt="phone icon"/></span> Call Now
                  </button>

                  <button type="button" class="btn btn-primary btn-lg width-left-icon" 
                  data-toggle="modal" data-target="#send_message">
                    <span><img src="assets/images/email-white.svg" alt="phone icon"/></span> Send Message
                  </button>
                </div>
              </div>

              <div class="shaded-box">
                <div class="text-center">
                  <div class="building-img">
                    <img src="assets/images/building-img.jpg" alt="Building Image" />
                  </div>

                  <h4>Taurus Floor Real Estate</h4>
                  <span class="tag-label btn">Verified</span>

                  <div class="building-info">
                    <ul>
                      <li>RERA Permit Number: <span>20281</span></li>
                      <li>RERA Registration Number: <span>20281</span></li>
                      <li>DED License Number: <span>794945</span></li>
                    </ul>
                  </div>
                 </div>
              </div>
            </div>
          </div>
        </div>
      </div>    
    </section>

    <section class="recomended-properties aos-init aos-animate" data-aos="fade-up">
      <div class="container">
        <h2>Similar Ads</h2>
        <a href="#" class="show-more">Show More</a>
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12 aos-init aos-animate" data-aos="fade-up">
            <a href="#" class="property-block width-detail">
              <div class="property-img">
                <img src="assets/images/properties-images/property-1.jpg" alt="peroperty image">
              </div>
              
              <label>
                <input type="checkbox">
                <span></span>
              </label>

              <div class="property-description">
                <h4>Jumeirah Island</h4>
                <h3>Spacious the Best layout 2 bed</h3>
                <div class="price">1200 <span>AED</span></div>

                <div class="features">
                  <div class="item beds">2 Beds</div>
                  <div class="item baths">2 Baths</div>
                  <div class="item area">1075 sqft</div>
                </div>
              </div>
            </a>
          </div>
          
          <div class="col-md-4 col-sm-4 col-xs-12 aos-init aos-animate" data-aos="fade-up">
            <a href="#" class="property-block width-detail">
              <div class="property-img">
                <img src="assets/images/properties-images/property-2.jpg" alt="peroperty image">
              </div>

              <label>
                <input type="checkbox">
                <span></span>
              </label>

              <div class="property-description">
                <h4>Jumeirah Island</h4>
                <h3>3 Bed Room Commercial Villa in</h3>
                <div class="price">2450 <span>AED</span></div>

                <div class="features">
                  <div class="item beds">3 Beds</div>
                  <div class="item baths">3 Baths</div>
                  <div class="item area">2200 sqft</div>
                </div>
              </div>
            </a>
          </div>

          <div class="col-md-4 col-sm-4 col-xs-12 aos-init aos-animate" data-aos="fade-up">
            <a href="#" class="property-block width-detail">
              <div class="property-img">
                <img src="assets/images/properties-images/peroperty-3.jpg" alt="peroperty image">
              </div>

              <label>
                <input type="checkbox">
                <span></span>
              </label>

              <div class="property-description">
                <h4>Jumeirah Island</h4>
                <h3>Perfect Family Villa in Downtown.</h3>
                <div class="price">2450 <span>AED</span></div>

                <div class="features">
                  <div class="item beds">3 Beds</div>
                  <div class="item baths">3 Baths</div>
                  <div class="item area">2200 sqft</div>
                </div>
              </div>
            </a>
          </div>
        </div>


      </div>
    </section>

    <!-- send message modal -->
    <div class="modal fade custom-modal" id="send_message" tabindex="-1" role="dialog" aria-labelledby="send_messageLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Send Message</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Enter your name" />      
              </div>

              <div class="form-group">
                <input type="email" class="form-control" placeholder="Enter your email" />      
              </div>

              <div class="form-group">
                <input type="tel" class="form-control" placeholder="Enter your phone number" />      
              </div>

              <div class="form-group">
                <textarea class="form-control" placeholder="Enter your message"></textarea>
              </div>

              <div class="text-center">
                <button class="btn btn-warning btn-lg search-btn cta" type="submit">Send Message</button>        
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

      
    <!-- add footer -->
    <?php include 'footer.php'; ?>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  </body>
</html>