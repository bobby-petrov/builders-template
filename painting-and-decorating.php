<!DOCTYPE html>
<html lang="en-GB">
<head>
<?php include('headers/painting-and-decorating.php');?>	

<?php include('header.php'); ?>

		<!--END of header-->

		<!--START of slider-->
		<div class="row">
			<div class="col-sm-12">						
				<div class="jumbotron slider top-border bottom-border">
						<div class="inner-shadow-box">
							<h1>PAINTING AND DECORATING <?php include 'vars.php'; echo "$area"?></h1>
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
						<h2 class="panel-title">PAINTING AND DECORATING SERVICES <?php include 'vars.php'; echo "$area"?><br></h2>
					</div>
					<div class="panel-body">
						<p><?php include 'vars.php'; echo "$area $job"?> can help with everything from <strong>single room refurbishments</strong> to <strong>building maintenance</strong> and <strong>renovation projects</strong>. We offer comprehensive <strong>traditional painting and decorating</strong> work for exteriors and interiors. We also offer a wide range of specialist coatings that enhance any <strong>property</strong>’s cleanliness level and fire safety rating.</p>						
						<p>We offer a high quality and professional finish to all our work and pride ourselves on being reliable and well respected.  With competitive prices and a skilled workforce, this means that we finish jobs on time and with complete satisfaction.</p>
						<h4>Get in touch with your painting and decorating ideas</h4>
						<p>Get a no obligation <strong>painting and decorating</strong> quote today. We will provide you with professional <strong>painters</strong> and <strong>decorators</strong> and ensure minimal disruption in your household.</p>
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