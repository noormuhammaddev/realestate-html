<!DOCTYPE html>
<html lang="en-US">
  <!-- figma design: https://www.figma.com/file/jkkuHgZswnclyeA3bsU88T/Real-Estate-Final?node-id=1%3A2 -->
  <head>
    <title>Search Results</title>
    <?php include 'includes/header-includes.php'; ?>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  </head>
  <body>
    <!-- add header -->
      <?php include 'header.php'; ?>

    <!-- search results page content -->
    <section class="search-results">
      <div class="container">

        <!-- breadcrumb -->
        <ul class="breadcrumb-realestate">
            <li><a href="/">Home</a></li>
            <li class="active">Search Results</li>
          </ul>

          <h2>Search Results<span>(4367)</span></h2>

          <!-- search form -->
        <div class="serach-form"  data-aos="fade-right">
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
                    <div class="col-md-4">
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
                    
                    <div class="col-md-2 col-sm-2 col-xs-12">
                      <div class="form-group">
                        <select class="form-control">
                          <option>Property Type</option>
                          <option>House</option>
                          <option>Flats</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-2 col-sm-2 col-xs-12">
                      <div class="form-group">
                        <select class="form-control">
                          <option>Price Range</option>
                          <option>200 - 300</option>
                          <option>301 - 400</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-2 col-sm-2 col-xs-12">
                      <div class="form-group">
                        <select class="form-control">
                          <option>Bedrooms Range</option>
                          <option>2</option>
                          <option>3</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-2 col-sm-2 col-xs-12">
                      <div class="form-group">
                        <select class="form-control">
                          <option>Area Range</option>
                          <option>25 x 30</option>
                          <option>30 x 50</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-2 col-sm-2 col-xs-12">
                      <div class="form-group">
                        <select class="form-control">
                          <option>Amenities</option>
                          <option>2</option>
                          <option>3</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-2 col-sm-2 col-xs-12">
                      <input type="text" class="form-control with-left-icon search" placeholder="Keyword Search" />
                    </div>

                    <div class="col-md-8 col-sm-8 col-xs-12">
                      <button class="btn btn-warning btn-lg search-btn cta" type="submit">Search Properties</button>
                      <button type="reset" class="btn-link">Reset Filters</button>
                    </div>
                  </div>
                </form>
              </div>

              <div class="tab-data d-none" id="tab-rent-data">
                <form class="form-container">
                  <div class="row">
                    <div class="col-md-4">
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
                    
                    <div class="col-md-2 col-sm-2 col-xs-12">
                      <div class="form-group">
                        <select class="form-control">
                          <option>Property Type</option>
                          <option>House</option>
                          <option>Flats</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-2 col-sm-2 col-xs-12">
                      <div class="form-group">
                        <select class="form-control">
                          <option>Price Range</option>
                          <option>200 - 300</option>
                          <option>301 - 400</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-2 col-sm-2 col-xs-12">
                      <div class="form-group">
                        <select class="form-control">
                          <option>Bedrooms Range</option>
                          <option>2</option>
                          <option>3</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-2 col-sm-2 col-xs-12">
                      <div class="form-group">
                        <select class="form-control">
                          <option>Area Range</option>
                          <option>25 x 30</option>
                          <option>30 x 50</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-2 col-sm-2 col-xs-12">
                      <div class="form-group">
                        <select class="form-control">
                          <option>Amenities</option>
                          <option>2</option>
                          <option>3</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-2 col-sm-2 col-xs-12">
                      <input type="text" class="form-control with-left-icon search" placeholder="Keyword Search" />
                    </div>

                    <div class="col-md-8 col-sm-8 col-xs-12">
                      <button class="btn btn-warning btn-lg search-btn cta" type="submit">Search Properties</button>
                      <button type="reset" class="btn-link">Reset Filters</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="property-list">
          <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12" data-aos="fade-up" >
              <a href="#" class="property-block width-detail">
                <div class="property-img">
                  <img src="assets/images/properties-images/property-1.jpg" alt="peroperty image">
                </div>
                
                <label>
                  <input type="checkbox" />
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
            
            <div class="col-md-4 col-sm-4 col-xs-12" data-aos="fade-up" >
              <a href="#" class="property-block width-detail">
                <div class="property-img">
                  <img src="assets/images/properties-images/property-2.jpg" alt="peroperty image">
                </div>

                <label>
                  <input type="checkbox" />
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

            <div class="col-md-4 col-sm-4 col-xs-12" data-aos="fade-up" >
              <a href="#" class="property-block width-detail">
                <div class="property-img">
                  <img src="assets/images/properties-images/peroperty-3.jpg" alt="peroperty image">
                </div>

                <label>
                  <input type="checkbox" />
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

            <div class="col-md-4 col-sm-4 col-xs-12" data-aos="fade-up" >
              <a href="#" class="property-block width-detail">
                <div class="property-img">
                  <img src="assets/images/properties-images/peroperty-3.jpg" alt="peroperty image">
                </div>

                <label>
                  <input type="checkbox" />
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

            <div class="col-md-4 col-sm-4 col-xs-12" data-aos="fade-up" >
              <a href="#" class="property-block width-detail">
                <div class="property-img">
                  <img src="assets/images/properties-images/property-1.jpg" alt="peroperty image">
                </div>
                
                <label>
                  <input type="checkbox" />
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
            
            <div class="col-md-4 col-sm-4 col-xs-12" data-aos="fade-up" >
              <a href="#" class="property-block width-detail">
                <div class="property-img">
                  <img src="assets/images/properties-images/property-2.jpg" alt="peroperty image">
                </div>

                <label>
                  <input type="checkbox" />
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

            <div class="col-md-4 col-sm-4 col-xs-12" data-aos="fade-up" >
              <a href="#" class="property-block width-detail">
                <div class="property-img">
                  <img src="assets/images/properties-images/property-1.jpg" alt="peroperty image">
                </div>
                
                <label>
                  <input type="checkbox" />
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
            
            <div class="col-md-4 col-sm-4 col-xs-12" data-aos="fade-up" >
              <a href="#" class="property-block width-detail">
                <div class="property-img">
                  <img src="assets/images/properties-images/property-2.jpg" alt="peroperty image">
                </div>

                <label>
                  <input type="checkbox" />
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

            <div class="col-md-4 col-sm-4 col-xs-12" data-aos="fade-up" >
              <a href="#" class="property-block width-detail">
                <div class="property-img">
                  <img src="assets/images/properties-images/peroperty-3.jpg" alt="peroperty image">
                </div>

                <label>
                  <input type="checkbox" />
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

            <div class="col-md-4 col-sm-4 col-xs-12" data-aos="fade-up" >
              <a href="#" class="property-block width-detail">
                <div class="property-img">
                  <img src="assets/images/properties-images/peroperty-3.jpg" alt="peroperty image">
                </div>

                <label>
                  <input type="checkbox" />
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

            <div class="col-md-4 col-sm-4 col-xs-12" data-aos="fade-up" >
              <a href="#" class="property-block width-detail">
                <div class="property-img">
                  <img src="assets/images/properties-images/property-1.jpg" alt="peroperty image">
                </div>
                
                <label>
                  <input type="checkbox" />
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
            
            <div class="col-md-4 col-sm-4 col-xs-12" data-aos="fade-up" >
              <a href="#" class="property-block width-detail">
                <div class="property-img">
                  <img src="assets/images/properties-images/property-2.jpg" alt="peroperty image">
                </div>

                <label>
                  <input type="checkbox" />
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

          </div>

          <!-- pagination -->
          <div class="costum-pagination text-center">
            <ul>
              <li><a href="#"></a></li>
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
      
    <!-- add footer -->
    <?php include 'footer.php'; ?>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  </body>
</html>