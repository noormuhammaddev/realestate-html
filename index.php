<!DOCTYPE html>
<html lang="en-US">
  <!-- figma design: https://www.figma.com/file/jkkuHgZswnclyeA3bsU88T/Real-Estate-Final?node-id=1%3A2 -->
  <head>
    <title>Realestate</title>
    <?php include 'includes/header-includes.php'; ?>
  </head>
  <body>
    <!-- add header -->
      <?php include 'header.php'; ?>

    <!-- home page content -->
    <!-- hero section -->
    <section class="hero-section">
      <div class="container">

        <div class="hero-carousel">
          <ul id="hero-carousel" class="owl-carousel carousel">
            <li><img src="assets/images/hero-slider/banner.jpg" alt="slider image" class="img-fluid"/></li>
            <li><img src="assets/images/hero-slider/banner.jpg" alt="slider image" class="img-fluid"/></li>
          </ul>
        </div>

        <div class="serach-form">
          <h1>Search Properties</h1>
          <p>Redefining the experience of selling, buying & renting properties in this region.</p>

          <div class="search-tabs-container">
            <div class="tabs">
              <ul class="tab-buy" id="tabs">
                <li id="tab-buy">Buy</li>
                <li id="tab-rent">Rent</li>
              </ul>
            </div>

            <div class="tabs-content">
              <div class="tab-data" id="tab-buy-data">
                <form class="form-container">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <button class="btn btn-outline-secondary dropdown-toggle" 
                              type="button" data-toggle="dropdown" aria-haspopup="true" 
                              aria-expanded="false">Abu Dubai
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="#">Pakistan</a>
                              <a class="dropdown-item" href="#">China</a>
                              <a class="dropdown-item" href="#">USA</a>
                            </div>
                          </div>
                          <input type="text" class="form-control with-left-icon location-map" 
                          aria-label="Text input with dropdown button" placeholder="Enter your location">
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <div class="form-group">
                        <select class="form-control">
                          <option>Property Type</option>
                          <option>House</option>
                          <option>Flats</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <div class="form-group">
                        <select class="form-control">
                          <option>Price Range</option>
                          <option>200 - 300</option>
                          <option>301 - 400</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <div class="form-group">
                        <select class="form-control">
                          <option>Bedrooms Range</option>
                          <option>2</option>
                          <option>3</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <div class="form-group">
                        <select class="form-control">
                          <option>Area Range</option>
                          <option>25 x 30</option>
                          <option>30 x 50</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <div class="form-group">
                        <select class="form-control">
                          <option>Amenities</option>
                          <option>2</option>
                          <option>3</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" class="form-control with-left-icon search" placeholder="Keyword Search" />
                    </div>
                  </div>

                  <button class="btn btn-warning btn-lg search-btn cta" type="submit">Search Properties</button>
                </form>
              </div>

              <div class="tab-data d-none" id="tab-rent-data">
                <form class="form-container">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <button class="btn btn-outline-secondary dropdown-toggle" 
                              type="button" data-toggle="dropdown" aria-haspopup="true" 
                              aria-expanded="false">Abu Dubai
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="#">Pakistan</a>
                              <a class="dropdown-item" href="#">China</a>
                              <a class="dropdown-item" href="#">USA</a>
                            </div>
                          </div>
                          <input type="text" class="form-control with-left-icon location-map" 
                          aria-label="Text input with dropdown button" placeholder="Enter your location">
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <div class="form-group">
                        <select class="form-control">
                          <option>Property</option>
                          <option>House</option>
                          <option>Flats</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <div class="form-group">
                        <select class="form-control">
                          <option>Rent Price Range</option>
                          <option>200 - 300</option>
                          <option>301 - 400</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <div class="form-group">
                        <select class="form-control">
                          <option>Bedrooms</option>
                          <option>2</option>
                          <option>3</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <div class="form-group">
                        <select class="form-control">
                          <option>Area Range</option>
                          <option>25 x 30</option>
                          <option>30 x 50</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <!-- <div class="col-md-6 col-sm-6 col-xs-12">
                      <div class="form-group">
                        <select class="form-control">
                          <option>Amenities</option>
                          <option>2</option>
                          <option>3</option>
                        </select>
                      </div>
                    </div> -->

                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <div class="form-group">
                        <input type="text" class="form-control with-left-icon search" placeholder="Keyword Search" />
                      </div>
                    </div>
                  </div>

                  <button class="btn btn-warning btn-lg search-btn cta" type="submit">Search Properties</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- recommended properties -->
    <section class="recomended-properties">
      <div class="container">
        <h2>Recommended Properties</h2>
        <a href="#" class="show-more">Show More</a>
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="property-block width-detail">
              <div class="property-img">
                <img src="assets/images/properties-images/property-1.jpg" alt="peroperty image" />
              </div>

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
            </div>
          </div>
          
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="property-block width-detail">
              <div class="property-img">
                <img src="assets/images/properties-images/property-2.jpg" alt="peroperty image" />
              </div>

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
            </div>
          </div>

          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="property-block width-detail">
              <div class="property-img">
                <img src="assets/images/properties-images/peroperty-3.jpg" alt="peroperty image" />
              </div>

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
            </div>
          </div>
        </div>


      </div>
    </section>

    <!-- Popular Categories -->
    <section class="popular-categories">
      <div class="container">
        <h2>Popular Categories</h2>

        <ul id="popular-properties" class="owl-carousel carousel">
          <li>
            <div class="property-block">
              <div class="property-img">
                <img src="assets/images/properties-images/prop-1.jpg" alt="peroperty image" />
                <h3>Monthly Short Term for Rent</h3>
              </div>
            </div>
          </li>

          <li>
            <div class="property-block">
              <div class="property-img">
                <img src="assets/images/properties-images/prop-2.jpg" alt="peroperty image" />
                <h3>Commercial for Rent</h3>
              </div>
            </div>
          </li>

          <li>
            <div class="property-block">
              <div class="property-img">
                <img src="assets/images/properties-images/prop-3.jpg" alt="peroperty image" />
                <h3>Luxury Villas for Rent</h3>
              </div>
            </div>
          </li>

          <li>
            <div class="property-block v2">
              <div class="property-img">
                <img src="assets/images/properties-images/prop-4.jpg" alt="peroperty image" />
                <h3>Appartments for Rent</h3>
              </div>
            </div>
          </li>
          <li>
            <div class="property-block">
              <div class="property-img">
                <img src="assets/images/properties-images/prop-2.jpg" alt="peroperty image" />
                <h3>Commercial for Rent</h3>
              </div>
            </div>
          </li>

          <li>
            <div class="property-block">
              <div class="property-img">
                <img src="assets/images/properties-images/prop-3.jpg" alt="peroperty image" />
                <h3>Luxury Villas for Rent</h3>
              </div>
            </div>
          </li>
          <li>
            <div class="property-block">
              <div class="property-img">
                <img src="assets/images/properties-images/prop-2.jpg" alt="peroperty image" />
                <h3>Commercial for Rent</h3>
              </div>
            </div>
          </li>

          <li>
            <div class="property-block">
              <div class="property-img">
                <img src="assets/images/properties-images/prop-3.jpg" alt="peroperty image" />
                <h3>Luxury Villas for Rent</h3>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </section>

    <!-- Property Listing -->
    <section class="property-listings">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-12">
            <h3>Apartments for Rent</h3>
            <ul>
              <li>Apartments for rent in Dubai Marina</li>
              <li>Apartments for rent in Downtown Dubai</li>
              <li>Apartments for rent in The Palm Jumeirah</li>
              <li>Apartments for rent in Business Bay</li>
              <li>Apartments for rent in Dubai Silicon Oasis</li>
              <li>Apartments for rent in Jebel Ali</li>
              <li>Apartments for rent in JLT Jumeirah Lake Towers</li>
            </ul>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-12">
            <h3>Villas for Rent</h3>
            <ul>
              <li>Villas for rent in Dubai Marina</li>
              <li>Villas for rent in Downtown Dubai</li>
              <li>Villas for rent in The Palm Jumeirah</li>
              <li>Villas for rent in Business Bay</li>
              <li>Villas for rent in Dubai Silicon Oasis</li>
              <li>Villas for rent in Jebel Ali</li>
              <li>Villas for rent in JLT Jumeirah Lake Towers</li>
              <li>Villas for rent in International City</li>
              <li>Villas for rent in Dubai Hills Estate</li>
            </ul>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-12">
            <h3>Apartments for Rent</h3>
            <ul>
              <li>Apartments for rent in Dubai Marina</li>
              <li>Apartments for rent in Downtown Dubai</li>
              <li>Apartments for rent in The Palm Jumeirah</li>
              <li>Apartments for rent in Business Bay</li>
              <li>Apartments for rent in Dubai Silicon Oasis</li>
              <li>Apartments for rent in Jebel Ali</li>
              <li>Apartments for rent in JLT Jumeirah Lake Towers</li>
            </ul>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-12">
            <h3>Rooms for Rent</h3>
            <ul>
              <li>Rooms for rent in Bur Dubai</li>
              <li>Rooms for rent in Deira</li>
              <li>Rooms for rent in Dubai Marina</li>
              <li>Rooms for rent in Al Barsha</li>
              <li>Rooms for rent in Karama</li>
              <li>Rooms for rent in International City</li>
              <li>Rooms for rent in Al Qusais</li>
              <li>Rooms for rent in Al Nahda (Dubai)</li>
              <li>Rooms for rent in Jebel Ali</li>
              <li>Rooms for rent in Al Quoz</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
      
    <!-- add footer -->
    <?php include 'footer.php'; ?>
  </body>
</html>