<!doctype html>
<html lang="en">
  <head>
  	<title>Contact Form 08</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Bom A.1 Cookie</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-10">
					<div class="wrapper img" style="background-image: url(images/img.jpg);">
						<div class="row">
							<div class="col-md-9 col-lg-7">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4">let know who are you</h3>
									<div id="form-message-warning" class="mb-4"></div> 
										<div id="form-message-success" class="mb-4">
										Your message was sent, thank you!
										</div>
									<form class="contactForm" id="frm" action="welcome.php" >
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="name">Enter your Name</label>
													<input type="text" class="form-control" id="username" name="username" placeholder="Name">
												</div>
											</div>
											<div class="col-md-6"> 
												<div class="form-group">
													<label class="label" for="age">Enter Your age</label>
													<input type="text" class="form-control" id="age" name="age" placeholder="age">
												</div>
											</div>
											<div class="col-md-12"> 
												<div class="form-group">
													<select class="form-control" aria-label="Default select example" id="color">
														<option selected>Select Color</option>
														<option value="red">red</option>
														<option value="green">green</option>
														<option value="purple">Purple</option>
											  		</select>
												</div>
											</div>
											<div class="col-md-12"> 
												<div class="form-group">
													<div class="row" id="gender">
														<div class="col-md-6">
															<img src="images/1.jpg" style="width: 100px;height:184px">
                												<input type="radio" id="male" name="gender" value="male">
														</div>
														<div class="col-md-6">
															<img src="images/2.jpg" style="width: 100px;height:184px">
															<input type="radio" id="female" name="gender" value="female">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="button" class="btn btn-primary" onclick="saveInfo()" value="submit">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
  	<script src="js.js"></script>
  </body>
</html>

