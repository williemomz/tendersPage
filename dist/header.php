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

	<title>Citizen Digital - Tendersoko</title>	
</head>
<body>
	<div class="container">
		<!-- Logo -->
		<nav class="navbar">
		  <a class="navbar-brand" href="#">
		    <img src="assets/citizen-digital.png" width="146" height="53" alt="">
		  </a>
		</nav>
	</div>
	<hr>
		<div class="header_bg">
				<div class="container">
					<div class="col-md-12">
						<nav class="navbar navbar-expand-lg navbar-light">

							<div class="col-md-4">
								<table>
									<tr>
										<form class="form-inline">
											<td><input class="form-control " type="search" placeholder="Search by Tender Title..." aria-label="Search"></td>
											<td><button class="btn" type="submit"><i class="fa fa-search"></i></button></td>

											<td><button class="navbar-toggler offset-12 btn" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
												<i class="fa fa-filter"></i>
											</button></td>
										</form>
									</tr>
								</table>
							</div>


							<div class="col-md-8 desktop">
								<div class="collapse navbar-collapse" id="navbarSupportedContent">

									<form class="form-inline">
										<ul class="navbar-nav mr-auto">
											<li class="nav-item">
												<select class="custom-select" id="inputGroupSelect01">
													<option selected>Filter by Category & Closing Date </option>
													<option value="1">Non Governmental Organizations</option>
													<option value="2">Institutions</option>
													<option value="3">Parastatals</option>
                                                    <option value="4">County Governments</option>
                                                    <option value="5">National Governments</option>
												</select>
											</li>
											<li class="nav-item">
												<input class="form-control hg" type="date" value="<?php echo date("Y-m-d"); ?>" id="example-date-input">
											</li>
										</ul>
										<button class="btn my-2 my-sm-0" type="submit">Filter</button>
									</form>

								</div>
							</div>
						</nav>
					</div>
				</div>
		</div>