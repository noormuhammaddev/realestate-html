<!DOCTYPE html>
<html lang="en-US">

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
                buy
              </div>

              <div class="tab-data d-none" id="tab-rent-data">
                Rent
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
      
    <!-- add footer -->
    <?php include 'footer.php'; ?>
  </body>
</html>