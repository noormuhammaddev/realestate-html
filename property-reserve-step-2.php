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
						<li class="checked">Step 1</li>
						<li class="current">Step 2</li>
						<li>Step 3</li>
					</ul>
				</div>

				<div class="page-title"><h1>Reserve Property</h1></div>

				<div class="step-content">
					<div class="step-no-wrapper">
						<div class="step-info">
							<div class="step-numbers">Step <span>2</span> of 3</div>
							<h2>Payment Details</h2>
						</div>

						<ul class="payment-box">
							<li>
								<span>Payments</span>
								<span>1 Payment</span>
							</li>

							<li>
								<span>Move-in Date</span>
								<span>01-04-2020</span>
							</li>
						</ul>
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-8">
						<!-- Reservation Fee -->
							<div class="charges-info-block">
								<h4>Reservation Fee</h4>

								<div class="price-box">
									2,560 AED
									<span>Inclusive of 5% VAT</span>
								</div>
								<p>5% of your rent to reserve this home today</p>
								<div class="exclaimination-text">*Free cancellation within 24 hrs</div>
							</div>

							<!-- Move-in Fee -->
							<div class="charges-info-block">
								<h4>Move-in Fee</h4>
								<p>You will only pay after signing the contract</p>
								
								<div class="info-row clear">
									<div class="item">Security Deposit</div>
									<div class="item">2,400 AED</div>
								</div>

								<div class="info-row clear">
									<div class="item">Ejari <span>Inclusive of 5% VAT</span></div>
									<div class="item">240 AED</div>
								</div>

							</div>

							<!-- Rental Payments -->
							<div class="charges-info-block">
								<h4>Rental Payments</h4>
								<p>Choose payment method</p>
								
								<div class="radio-group-cutom orange" id="payment_method">
									<label>
										<input type="radio" name="paymentMethod" value="debit_card"  checked> 
										<span class="radio"></span>
										<span class="lable-text">Direct debit<span>
									</label>

									<label>
										<input type="radio" name="paymentMethod" value="credit_card" > 
										<span class="radio"></span>
										<span class="lable-text">Credit/debit Card<span>
									</label>

									<label>
										<input type="radio" name="paymentMethod" value="cryptocurrency" > 
										<span class="radio"></span>
										<span class="lable-text">Cryptocurrency<span>
									</label>
								</div>

								<div class="payment-tab-content">
									<div class="tab-content" style="display: block" id="debit_card_data">
										<form action="">
											<label>Add Credit/debit Card</label>
											<div class="row">
												<div class="col-md-6 form-group">
													<input type="text" class="form-control" placeholder="Card Holder Name" />
												</div>
												<div class="col-md-6 form-group">
													<input type="text" class="form-control" placeholder="Card No. (XXXX XXXX XXXX XXXX)" />
												</div>
												<div class="col-md-6 form-group">
													<input type="text" class="form-control" placeholder="Expiry Date (MM/YY)" />
												</div>
												<div class="col-md-6 form-group">
													<input type="text" class="form-control" placeholder="Security Code (CVV)" />
												</div>
											</div>
											<button type="submit" class="btn btn-warning">Add Card</button>
										</form>
									</div>

									<div class="tab-content" id="credit_card_data">
										<form action="">
											<label>Add Credit/debit Card</label>
											<div class="row">
												<div class="col-md-6 form-group">
													<input type="text" class="form-control" placeholder="Card Holder Name" />
												</div>
												<div class="col-md-6 form-group">
													<input type="text" class="form-control" placeholder="Card No. (XXXX XXXX XXXX XXXX)" />
												</div>
												<div class="col-md-6 form-group">
													<input type="text" class="form-control" placeholder="Expiry Date (MM/YY)" />
												</div>
												<div class="col-md-6 form-group">
													<input type="text" class="form-control" placeholder="Security Code (CVV)" />
												</div>
											</div>
											<button type="submit" class="btn btn-warning">Add Card</button>
										</form>
									</div>

									<div class="tab-content" id="cryptocurrency_data">
										<div class="info-row clear">
											<div class="item">Rent</div>
											<div class="item">48,000 AED</div>
										</div>
									</div>
								</div>
								
							</div>

							<!-- Total -->
							<div class="charges-info-block">
								<div class="info-row total-row clear">
									<div class="item">Total</div>
									<div class="item">53,150 AED</div>
								</div>
							</div>
						</div>
					</div>

					<!-- payment timeline modal cta -->
					<button type="button" class="link-lg" data-toggle="modal" data-target="#payment-timeline-modal">
						View full payment timeline
          </button>
				</div>
			</div>
		</section>

		<!-- payment timeline modal -->
		<!-- send message modal -->
<div class="modal fade custom-modal simple timeline-modal" id="payment-timeline-modal" tabindex="-1" role="dialog" aria-labelledby="#payment-timeline-modal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h4 class="modal-title text-center">Payment Timeline</h4>
        <p class="text-center">See your Payment details break down</p>
				
				<ul class="payment-timeline">
					<li class="current">
						<div class="left">
							<h3>Pay Now</h3>
							<p class="grey">Reservation Fee</p>
						</div>
						<div class="right">
							<h5>2,560 AED</h5>
							<p class="grey">Inclusive of 5% VAT</p>
						</div>
					</li>

					<li class="">
						<div class="left">
							<h3>Before Move in</h3>
							<p>Security Deposit</p>
							<p>Kamal Fee</p>
						</div>
						<div class="right">
							<h5>2,560 AED</h5>
							<p>2,780 AED</p>
						</div>
					</li>

					<li class="">
						<div class="left">
							<h3>Move in</h3>
							<p>Reservation Fee</p>
						</div>
						<div class="right">
							<h5>2,560 AED</h5>
							<p>2,780 AED</p>
						</div>
					</li>
				</ul>
			
      </div>
    </div>
  </div>
</div>

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