<!DOCTYPE html>
<html lang="en-GB">
<head>
<?php include('headers/tiling.php');?>	

<?php include('header.php'); ?>

		<!--END of header-->

		<!--START of slider-->
		<div class="row">
			<div class="col-sm-12">						
				<div class="jumbotron slider top-border bottom-border">
						<div class="inner-shadow-box">
							<h1>PROFESSIONAL TILING <?php include 'vars.php'; echo "$area"?></h1>
							<br><br>							
							<a href="/contacts.php" class="btn btn-lg btn-yellow">Get a Quote</a>
						</div>
				</div>
			</div>
		</div>
		<!--END of slider-->			
				
		<!--START of about us section-->
		<main class="row spacer-bottom spacer-top">
			<!-- STARRT of main column-->
			<article class="col-sm-8">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h2 class="panel-title">TILING <?php include 'vars.php'; echo "$area"?><br></h2>
					</div>
					<div class="panel-body">
						<h3>Enhance your kitchen or bathroom with some stylish tiling</h3>
						<p><?php include 'vars.php'; echo "$area $job"?> offer an outstanding <strong>tiling service</strong> in Fulham area. Our experienced professionals can attend to internal and <strong>external tiling</strong> procedures. Whether you want to tile the walls in your bathroom or wet room, or <strong>undertile heating</strong> for your conservatory, we make sure the correct materials, patterns and preparation needed its carefully considered.</p>
						<ul><h4>Our tiling services include:</h4>
							<li>Removing old tiles</li>
							<li>Floor levelling</li>
							<li>Title waterproofing</li>
							<li>Under tile heating</li>
						</ul>
						<p>We have the specialist cutting tools and many years of experience, allowing us to complete jobs to the highest standards and always meet customers’ expectations. Tiling is the finishing touch to any bathroom, kitchen or conservatory, so we pay extra attention to detail.</p>
						<h4>We provide free estimates and expert advice</h4>
						<p>Please get in touch with your <strong>tiling</strong> requirements, and we will provide you with a free estimate and expert advice.</p>
					</div>
				</div>				
			</article>
			<!--END of main column-->

			<!--START of second column-->
			<?php include('side-bar.php'); ?>
			<!--END of second column-->
		</main>		
		<!--END of about us section-->	
		<!--START of footer section-->
		<?php include('footer.php'); ?>