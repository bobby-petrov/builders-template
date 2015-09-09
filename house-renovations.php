<!DOCTYPE html>
<html lang="en-GB">
<head>
<?php include('headers/house-renovations.php');?>	
	
<?php include('header.php'); ?>


		<!--END of header-->

		<!--START of slider-->
		<div class="row">
			<div class="col-sm-12">						
				<div class="jumbotron slider top-border bottom-border">
						<div class="inner-shadow-box">
							<h1> HOUSE RENOVATIONS <?php include 'vars.php'; echo "$area"?></h1>
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
						<h2 class="panel-title">HOUSE RENOVATIONS <?php include 'vars.php'; echo "$area"?></h2>
					</div>
					<div class="panel-body">
						<p>Feel like your house needs to be modernised? Turn your house into a <strong>home</strong> by refreshing the look and feel. <?php include 'vars.php'; echo "$job $area"?> are professional experts when it comes to <strong>home renovation</strong>. We have an experienced team of professional builders who expertly handle every aspect of a <strong>refurbishment project</strong>, from design, planning and build through to the finishing and cosmetic works.</p>
						<p>All of our house <strong>renovation projects</strong> are completed to the highest possible standards, producing fantastic results. We take great pride in our customers’ satisfaction. We have the experience and capability to deliver your needs, no job is too big or too small.</p>
						<h3>Do you have any renovation ideas yet?</h3>
						<p>Let us know what <strong>renovation ideas</strong> you have in mind by giving us a call. We’ll give you a free, no obligation quote.</p>
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