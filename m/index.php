<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php include '../../vars.php'; echo "$area $job"?> | Construction Company | Building Services in <?php include '../../vars.php'; echo "$area"?></title>
	<meta name="description" content="Call <?php include '../vars.php'; echo "$area $job"?> at 02083463702 - and our experienced builders in <?php include '../vars.php'; echo "$post_code"?> area will complete your building job to the highest quality within a carefully controlled budget.">
	<meta name="keywords" content="fulham builder">
</head>
<body>
	<!--START of home page-->
	<div data-role="page" id="home">
		<div data-role="header">
		<h1>Mobile version under development</h1>
			<a href="http://www.fulhambuilder.co.uk">Back to Desktop version</a>
			<a href="#house-extensions" data-prefetch="true">House Extensions</a>
		</div>
		<!--header-->

		<div role="main" class="ui-content">
			<p>CONTENT</p>
		</div>
		<!--/content-->

		<div data-role="footer">
			<p>footer</p>
		</div>
		<!--/footer-->
	</div>
	<!--/home page-->

	<!--START of house extensions-->
	<div data-role="page" id="house-extensions">
		<div data-role="header">
			<h1>House Extensions</h1>
		</div>
		<!--/header-->

		<div role="main" class="ui-content">
			
		</div>
		<!--/content-->

		<div data-role="footer">
			
		</div>
		<!--/footer-->
	</div>
	<!--/house extensions-->

	<!--START of house renovations-->
	<div data-role="page" id="house-renovations">
		<div data-role="header">
			
		</div>
		<!--/header-->

		<div role="main" class="ui-content">
			
		</div>
		<!--/content-->

		<div data-role="footer">
			
		</div>
		<!--/footer-->
	</div>
	<!--/house renovations-->
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
	<script>
		$(document).ready(function() {
			$.mobile.page.prototype.options.domCache = true;
		});//end of ready
	</script>
</body>
</html>