<!DOCTYPE html>
<html lang="en-US">
  <!-- figma design: https://www.figma.com/file/jkkuHgZswnclyeA3bsU88T/Real-Estate-Final?node-id=1%3A2 -->
  <head>
	<title>Realestate</title>
	
	<link href="https://vitalets.github.io/bootstrap-datepicker/bootstrap-datepicker/css/datepicker.css" type="text/css" rel="stylesheet" />
	<?php include 'includes/header-includes.php'; ?>	
</head>
  <body>
		<!-- add header -->
	  <?php include 'header.php'; ?>

		

		<section class="property-reserve">
			<div class="container">
				<div class="steps-bar">
					<ul>
						<li class="current">Step 1</li>
						<li>Step 2</li>
						<li>Step 3</li>
					</ul>
				</div>

				<div class="page-title"><h1>Reserve Property</h1></div>

				<div class="step-content">
					<div class="step-no-wrapper">
						<div class="step-info">
							<div class="step-numbers">Step <span>1</span> of 3</div>
							<h2>Select Move-in Date</h2>
						</div>
						<ul class="payment-box">
							<li>
								<span>Payments</span>
								<span>1 Payment</span>
							</li>
						</ul>
					</div>	
					<div class="row">
						<div class="col-lg-5 col-md-8">
							<div id="reserve-property" class="reserve-property-calendar"  data-date-format="dd-mm-yyyy"></div>

							<div class="reserve-bar">
								<div class="container">
									<div class="price">
										<span class="amount">2,560 AED</span>
										<span class="label">Reservation Fee</span>
									</div>
									<div class="action-wrapper">
										<a href="#" class="btn btn-primary cta">Continue</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- add footer -->
	<?php include 'footer.php'; ?>
	<script src="https://vitalets.github.io/bootstrap-datepicker/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript" ></script>
	<script>
			jQuery('#reserve-property').datepicker({
					todayBtn: 'linked'
			});
		</script>
  </body>
</html>