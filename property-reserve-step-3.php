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

		<section class="property-reserve">
			<div class="container">
				<div class="steps-bar">
					<ul>
						<li class="checked">Step 1</li>
						<li class="checked">Step 2</li>
						<li class="current">Step 3</li>
					</ul>
				</div>

				<div class="page-title"><h1>Reserve Property</h1></div>

				<div class="step-content">
					<div class="step-no-wrapper">
						<div class="step-info">
							<div class="step-numbers">Step <span>3</span> of 3</div>
							<h2>Upload Documents</h2>
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
						<div class="col-md-7">
							<div class="charges-info-block">
								<h4>Emirates ID, Visa & Passport </h4>

								<div class="upload-images">
									<div class="row">
										<div class="col-md-4 col-sm-6">
											<div class="upload-box">
												<div class="photo"></div>
												<span class="add"><input type="file" /></span>
												<label>Upload Emirates ID</label>
											</div>
										</div>

										<div class="col-md-4 col-sm-6">
											<div class="upload-box">
												<div class="photo"></div>
												<span class="add"><input type="file" /></span>
												<label>Upload Visa</label>
											</div>
										</div>

										<div class="col-md-4 col-sm-6">
											<div class="upload-box">
												<div class="photo"></div>
												<span class="add"><input type="file" /></span>
												<label>Upload Passport</label>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="charges-info-block">
								<h4>Proof of Income</h4>

								<div class="upload-images">
									<div class="row">
										<div class="col-md-4 col-sm-6">
											<div class="upload-box">
												<div class="photo"></div>
												<span class="add"><input type="file" /></span>
												<label>Upload Proof of Income</label>
											</div>
										</div>
									</div>

									<div class="exclaimination-text" style="margin-top: -20px">It is a competition guys, the proof of income gives landlords a chance to trust you better. </div>
								</div>
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