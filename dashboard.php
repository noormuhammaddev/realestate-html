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

      <h1>My Dashboard</h1>
      <div class="form-group">
        <div class="inline-dropdown">
          <select class="form-control">
            <option>All Locations</option>
            <option>Islamabad</option>
            <option>Sargodha </option>
          </select>
        </div>  
      </div>

      <div class="row">
        <div class="col-md-9">
          <div class="row property-boxes">
            <div class="col-lg-3 col-md-6">
              <div class="property-info-block">
                <div class="property-img">
                  <img src="assets/images/feature-icons/hotel.svg" alt="" />
                </div>
                <h4>Total Properties</h4>
                <div class="numbers">24</div>
                <div class="more-info">
                  <div class="box">
                    <span>Occupied</span>
                    <span class="count">16</span>
                  </div>

                  <div class="box">
                    <span>Vacant</span>
                    <span class="count">8</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <div class="property-info-block">
                <div class="property-img">
                  <img src="assets/images/feature-icons/sale.svg" alt="" />
                </div>
                <h4>Properties for Sale</h4>
                <div class="numbers">24</div>
                <div class="more-info">
                  <div class="box">
                    <span>Occupied</span>
                    <span class="count">16</span>
                  </div>

                  <div class="box">
                    <span>Vacant</span>
                    <span class="count">8</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <div class="property-info-block">
                <div class="property-img">
                  <img src="assets/images/feature-icons/rent.svg" alt="" />
                </div>
                <h4>Properties for Rent</h4>
                <div class="numbers">24</div>
                <div class="more-info">
                  <div class="box">
                    <span>Occupied</span>
                    <span class="count">16</span>
                  </div>

                  <div class="box">
                    <span>Vacant</span>
                    <span class="count">8</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <div class="property-info-block">
                <div class="property-img">
                  <img src="assets/images/feature-icons/label.svg" alt="" />
                </div>
                <h4>Sponsored Properties</h4>
                <div class="numbers">24</div>
                <div class="more-info">
                  <div class="box">
                    <span>Occupied</span>
                    <span class="count">16</span>
                  </div>

                  <div class="box">
                    <span>Vacant</span>
                    <span class="count">8</span>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <!-- stackChart -->
          <div class="box-shaded">
            <canvas id="stackChart" width="100%" height="100%"></canvas>
          </div>
        </div>
        <div class="col-md-3">
          <div class="property-info-inline">
            <div class="img-wrapper">
              <img src="assets/images/feature-icons/card-green.svg" alt="" />
            </div>
            <h4>Payment Received</h4>
            <div class="amount">1.2M AED</div>
          </div>

          <div class="property-info-inline">
            <div class="img-wrapper">
              <img src="assets/images/feature-icons/card-purple.svg" alt="" />
            </div>
            <h4>Payment Pending</h4>
            <div class="amount">1.2M AED</div>
          </div>

          <div class="box-shaded">
            <canvas id="myChart" width="400" height="400"></canvas>
          </div>

          <div class="row mini-group">
            <div class='col-md-6'>
              <div class="property-info-inline mini">
                <div class="img-wrapper">
                  <img src="assets/images/group-orange.svg" alt="" />
                </div>
                <h4>Clients</h4>
                <div class="amount">12</div>
              </div>
            </div>

            <div class='col-md-6'>
              <div class="property-info-inline mini">
                <div class="img-wrapper">
                  <img src="assets/images/group-blue.svg" alt="" />
                </div>
                <h4>New Deals</h4>
                <div class="amount">2</div>
              </div>
            </div>
          </div>
        </div>
      <div>
    </div>

    <!-- footer -->
    <?php include 'footer-simple.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
    <script>
      var ctx = document.getElementById('myChart').getContext('2d');
      var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Credit/Debit', 'Bank Transfer', 'Cash', 'Cheque', 'Crypto'],
            datasets: [{
                //label: 'Payment Mediums',
                data: [12, 19, 3, 5, 2],
                backgroundColor: [
                    '#0984E3',
                    '#FF785C',
                    '#F9EA71',
                    '#00D0A9',
                    '#777C80',
                ],
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

    // stack chart
    var stackC = document.getElementById('stackChart');
    var stackChart = new Chart(ctx, {
    data: {
        datasets: [
            {fill: 'origin'},      // 0: fill to 'origin'
            {fill: '+2'},          // 1: fill to dataset 3
            {fill: 1},             // 2: fill to dataset 1
            {fill: false},         // 3: no fill
            {fill: '-2'}           // 4: fill to dataset 2
        ]
    },
    options: {
        plugins: {
            filler: {
                propagate: true
            }
        }
    }
});
    </script>
  </body>
</html>