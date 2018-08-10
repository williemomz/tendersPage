<!DOCTYPE html>
<html>
<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- reboot css -->
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">

	<!-- Grid system -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	
    <!-- Font awesome -->
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<!-- <link href="css/font-awesome.min.css" rel="stylesheet"> -->
	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="css/main.css">

	<title>SUBSCRIPTION PACKAGES</title>
</head>
<body>
	<div class="container">
		<!-- Logo -->
		<nav class="navbar">
		  <a class="navbar-brand" href="index.php">
		    <img src="assets/citizen-digital.png" width="146" height="53" alt="">
		  </a>
		</nav>
	</div>
	<hr>
		<div class="header_bg">
				<div class="container">
					<div class="col-md-12">
						<nav class="navbar navbar-expand-lg navbar-light">

						</nav>
					</div>
				</div>
		</div>

	<div class="container">

		<div class="col-md-12">
			<div class="row">
				
				<div class="col-md-8 no-padding-mobile">
					<div class="col-md-12 no-padding-mobile">

						<div class="floatParent">

							<div class="tender-detail">

                                        <div class="col-md-12">
                                            <h2>SUBSCRIPTION PACKAGES</h2>
                                        </div>


							</div>

						</div>

					</div>
				</div>

				<div class="col-md-4 no-padding-mobile">
						<div id="my">
							<div class="subscribe">
								<form>
									<div class="form-group">
										<label>Get SMS alerts</label>
									</div>								
									<div class="form-row"  style="display: flex; justify-content: center; flex-wrap: nowrap; margin: 10px 20px;">
										<i style="margin-right: 5px" class="fa fa-commenting fa-2x"></i>
										<input class="form-control" type="tel" id="forTel" placeholder="Enter your mobile no... +254">
									</div>
										<!--<input class="form-control" type="tel" value="1-(555)-555-5555" id="example-tel-input">-->
									<div class="mar">
										<button type="submit" class="btn subscribe_btn">SUBMIT</button>
									</div>
								</form>
							</div>

                        </div>

                  <div class="card-footer"  id="sub3_btn">
                      <button class="btn btn-lg" onclick="showUp()">SUBSCRIBE</button>
                  </div>


				</div>


		    </div>
		</div>

	</div>

    <!-- jQuery -->
	<script type="text/javascript" src="jquery/jquery-3.3.1.slim.min.js"></script>
	<!-- Popper js -->
	<script type="text/javascript" src="js/popper.js"></script>
	<!-- Bootstrap JavaScript plugins -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

	<script type="text/javascript">
        function showUp() {
            var toShow = document.getElementById("my");
               toShow.style.display = "block";

            var toHide = document.getElementById("sub3_btn");
               toHide.style.display = "none";
        }

    </script>
</body>
</html>