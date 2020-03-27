<!DOCTYPE html>
<html lang="en-US">
  <!-- figma design: https://www.figma.com/file/jkkuHgZswnclyeA3bsU88T/Real-Estate-Final?node-id=1%3A2 -->
  <head>
    <title>Add New Property</title>
    <?php include 'includes/header-includes.php'; ?>
  </head>
  <body class="dashbaord-body">
    <!-- left menu -->
    <?php include 'includes/left-menu.php'; ?>

    <div class="dashboard-content">
      <ul class="breadcrumb-realestate">
        <li><a href="/">My Properties</a></li>
        <li class="active">3Bed room Commercial Villa in Jumeirah</li>
      </ul>

      <h1>3 Bed Room Commercial Villa in Jumeirah</h1>
      <div class="info">
        Jumeirah Island
        <span class="for-sale">For Sale</span>
        <span class="booked">Booked Property</span>
      </div>

      <div class="property-actions">
        <button type="button" class="btn mr-3" data-toggle="modal" data-target="#more-property-modal">Remove Add</button>
        <button type="button" class="btn btn-warning">Edit Add</button>
      </div>

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

          <div class="row">
            <div class="col-md-8 col-sm-8 col-xs-12">
              <h3>Property Specs</h3>
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
              <h3>Property Status</h3>
              <div class="shaded-box">
                <div class="property-status">
                  <p class="grey-text">In Wishlist of</p>
                  <p class="dark-text">20 visitors</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> 
    </div>

    <!-- remove perperty modal -->
    <div class="modal fade custom-modal simple" id="more-property-modal" tabindex="-1" role="dialog" aria-labelledby="#more-property-modal" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <h4 class="modal-title text-center">Remove Add</h4>
            <p class="text-center">
            Are you sure you wish to remove this protery add? This will no lonnger be available to customers on customer portal.
            </p>
            
            <div class="text-center mt-4">
              <button type="button" class="btn mr-2">No, Cancel</button>
              <button type="button" class="btn btn-warning">Yes, Remove</button>
            </div>

          </div>
        </div>
      </div>
    </div>
    <!-- footer -->
    <?php include 'footer-simple.php'; ?>
  </body>
</html>