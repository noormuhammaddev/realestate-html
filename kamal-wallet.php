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

      <div class="row property-boxes">
        <div class="col-lg-3 col-md-6">
          <div class="property-info-inline">
            <div class="img-wrapper">
              <img src="assets/images/wallet-orange.svg" alt="" />
            </div>
            <h4>Current Balance</h4>
            <div class="amount">2.33M AED</div>
            <div class="statistics">
              This Month
              <span class="orange-light">12.5%</span>
              <img src="assets/images/up-arrow-light-orange.svg" alt="" />
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="property-info-inline">
            <div class="img-wrapper">
              <img src="assets/images/feature-icons/card-purple.svg" alt="" />
            </div>
            <h4>Transaction</h4>
            <div class="amount">25.4K AED</div>
            <div class="statistics">
              This Month
              <span class="orange">12.5%</span>
              <img src="assets/images/down-arrow-orange.svg" alt="" />
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="property-info-inline">
            <div class="img-wrapper">
              <img src="assets/images/feature-icons/card-purple.svg" alt="" />
            </div>
            <h4>Transaction</h4>
            <div class="amount">25.4K AED</div>
            <div class="statistics">
              This Month
              <span class="orange">12.5%</span>
              <img src="assets/images/down-arrow-orange.svg" alt="" />
            </div>
          </div>
        </div>
      </div>


      <!--  -->
      <table class="custom-table">
                <thead>
                  <tr>
                    <th>Payment Date</th>
                    <th>Type</th>
                    <th>Property Description</th>
                    <th>Landlord/Agent</th>
                    <th>Amount</th>
                    <th>Ref ID</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>12-05-2020</td>
                    <td>Property Rent</td>
                    <td>3 Bed Room Commercial Villa in Mid City</td>
                    <td>Asad Abdullah</td>
                    <td>2450 AED</td>
                    <td><a href="#">019182279</a></td>
                  </tr>

                  <tr>
                    <td>12-05-2020</td>
                    <td>Property Rent</td>
                    <td>3 Bed Room Commercial Villa in Mid City</td>
                    <td>Asad Abdullah</td>
                    <td>2450 AED</td>
                    <td><a href="#">019182279</a></td>
                  </tr>

                  <tr>
                    <td>12-05-2020</td>
                    <td>Property Rent</td>
                    <td>3 Bed Room Commercial Villa in Mid City</td>
                    <td>Asad Abdullah</td>
                    <td>2450 AED</td>
                    <td><a href="#">019182279</a></td>
                  </tr>

                  <tr>
                    <td>12-05-2020</td>
                    <td>Property Rent</td>
                    <td>3 Bed Room Commercial Villa in Mid City</td>
                    <td>Asad Abdullah</td>
                    <td>2450 AED</td>
                    <td><a href="#">019182279</a></td>
                  </tr>
                </tbody>
              </table>
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