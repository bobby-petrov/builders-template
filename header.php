	<link rel="icon" href="/images/favicon.ico">	

<?php include('gaaccount.php');?>

</head>
<body>			
	<div class="container">
		<!--START of header-->
		<header class="row row-correction" >
			<div class="col-sm-12 bkg-white">
				<div class="col-sm-3">
					<a href="/" title="Logo of <?php include 'vars.php'; echo "$area $job "?>"><img src="images/<?php include 'vars.php'; echo "$logo"?>" alt="Logo" title="Logo of <?php include 'vars.php'; echo "$area $job"?>" class="logo"></a>
				</div>
				<div class="col-sm-3 header-right-section">
					<div class="widget-icon-box">
						<div class="icon-box">
							<i class="fa fa-phone"></i>
							<div class="icon-box-text">
								<p><a href="tel:<?php include 'vars.php'; echo "$phone"?>"><?php include 'vars.php'; echo "$phone"?></a></p>
								<span>Call <strong>Fulham builder</strong></span>
							</div>
						</div>
					</div>											 
				</div>
				<div class="col-sm-3 header-right-section">
					<div class="widget-icon-box">
						<div class="icon-box">
							<a href="/" title="home"><i class="fa fa-home"></i></a>							
							<div class="icon-box-text">
								<p>London, UK</p>
								<span itemprop="streetAddress"><?php include 'vars.php'; echo "$street"?>, </span>
								<span itemprop="postalCode"><?php include 'vars.php'; echo "$post_code"?></span>
							</div>
						</div>
					</div>						
				</div>
				<div class="col-sm-3 header-right-section">
					<div class="widget-icon-box">
						<div class="icon-box">
							<i class="fa fa-clock-o"></i>
							<div class="icon-box-text">
								<p>24 / 7</p>
								<span>Express Services</span>
							</div>
						</div>
					</div>
				</div>							
			</div>				
		</header>