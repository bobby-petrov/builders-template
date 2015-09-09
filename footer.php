		<div class="row">
			<div class="col-sm-12">
				<div class="appointment">
					<h2 class="appointment-text">Call <a href="tel:<?php include 'vars.php'; echo "$phone"?>"> <?php include 'vars.php'; echo "$phone"?> </a>to make an appointment</h2>
				</div>			
			</div>			
		</div>
		<footer class="row">
			<div class="container">
				<div class="container-footer">
					<div class="footer address grey-line" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
						<p class="address-inner"><i class="fa fa-home"></i>
							<span itemprop="streetAddress"><?php include 'vars.php'; echo "$street"?>,</span>
							<span itemprop="postalCode"> <?php include 'vars.php'; echo "$post_code"?>, </span>
							<span itemprop="addressLocality">LONDON, UK</span>
						</p>					
					</div>
					<div class="row row-correction">
						<div class="col-sm-12 bkg-white grey-line">
							<div class="col-sm-4">
								<div class="footer-col">
									<h3>Contact Us</h3>
									<ul>
										<li><i class="fa fa-phone"></i> Tel:<span itemprop="telephone"><?php include 'vars.php'; echo "$phone"?></span></li>
										<!--<li><i class="fa fa-fax"></i> Fax:<span itemprop="faxNumber">( 070) 777 7777 </span></li>-->
										<li><i class="fa fa-envelope"></i><a href="mailto:<?php include 'vars.php'; echo "$email"?>"><span itemprop="email"><?php include 'vars.php'; echo "$email"?></span></a></li>
										<li><i class="fa fa-globe"></i><a href="http://www.janedoe.com" itemprop="url">www.fulhambuilder.co.uk</a></li>
									</ul>
								</div>
							</div>
							<div class="col-sm-8">
								<div class="col-sm-12 footer-col">
									<h3>Services at <?php include 'vars.php'; echo "$area $job"?></h3>
								</div>								
								<div class="col-sm-6">
									<div class="footer-col">										
										<ul>
											<li><i class="fa fa-chevron-right"></i> <a href="http://www.fulhambuilder.co.uk/house-extensions.php" alt="Building Services Fulham | House extensions in <?php include 'vars.php'; echo "$area"?>">House Extensions</a></li>
											<li><i class="fa fa-chevron-right"></i> <a href="http://www.fulhambuilder.co.uk/house-renovations.php" alt="Building Services Fulham | House renovations in <?php include 'vars.php'; echo "$area"?>">House Renovations</a></li>
											<li><i class="fa fa-chevron-right"></i> <a href="http://www.fulhambuilder.co.uk/loft-conversions.php" alt="Building Services Fulham | Loft conversion in  <?php include 'vars.php'; echo "$area"?>">Loft Conversions</a></li>
											<li><i class="fa fa-chevron-right"></i> <a href="http://www.fulhambuilder.co.uk/kitchen-fitting.php" alt="Building Services Fulham | Kitchen fitting in  <?php include 'vars.php'; echo "$area"?>">kitchen Fitting</a></li>
											
										</ul>									
									</div>
								</div>
								<div class="col-sm-6">
									<div class="footer-col">										
										<ul>											
											<li><i class="fa fa-chevron-right"></i> <a href="http://www.fulhambuilder.co.uk/bathroom-fitting.php" alt="Building Services Fulham | Bathroom fitting in  <?php include 'vars.php'; echo "$area"?>">Bathroom Fitting</a></li>
											<li><i class="fa fa-chevron-right"></i> <a href="http://www.fulhambuilder.co.uk/plastering.php" alt="Building Services Fulham | Platering in <?php include 'vars.php'; echo "$area"?>">Plastering</a></li>
											<li><i class="fa fa-chevron-right"></i> <a href="http://www.fulhambuilder.co.uk/tiling.php" alt="Building Services Fulham | Tiling in  <?php include 'vars.php'; echo "$area"?>">Tiling</a></li>
											<li><i class="fa fa-chevron-right"></i> <a href="http://www.fulhambuilder.co.uk/painting-and-decorating.php" alt="Building Services Fulham | Painting and Decorating in  <?php include 'vars.php'; echo "$area"?>">Painting and Decorating</a></li>
										</ul>									
									</div>
								</div>
							</div>
								
						</div>
						<div class="col-sm-12">
							<div class="copyright">
								<p>2015 | All rights reserved | <?php include 'vars.php'; echo "$area $job"?></p>
							</div>
						</div>
					</div>
				</div>										
			</div>
		</footer>			
		<!--END of footer section-->	
	</div>
	<!--START of SCRIPTS-->
	<script type="text/javascript">
  	WebFontConfig = {
    google: { families: [ 'Oswald::latin' ] }
  	};
	(function() {
		var wf = document.createElement('script');
		wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
		 '://ajax.googleapis.com/ajax/libs/webfont/1.0.17/webfont.js';
		wf.type = 'text/javascript';
		wf.async = 'true';
		var s = document.getElementsByTagName('script')[0];
		s.parentNode.insertBefore(wf, s);
	})(); 
	</script>

	<!--START of css import-->  	
	<script>
	function loadjscssfile(filename, filetype){
	    if (filetype=="js"){ //if filename is a external JavaScript file
	        var fileref=document.createElement('script')
	        fileref.setAttribute("type","text/javascript")
	        fileref.setAttribute("src", filename)
	    }
	    else if (filetype=="css"){ //if filename is an external CSS file
	        var fileref=document.createElement("link")
	        fileref.setAttribute("rel", "stylesheet")
	        fileref.setAttribute("type", "text/css")
	        fileref.setAttribute("href", filename)
	    }
	    if (typeof fileref!="undefined")
	        document.getElementsByTagName("head")[0].appendChild(fileref)
	}
	 
	//loadjscssfile("myscript.js", "js") //dynamically load and add this .js file
	//loadjscssfile("javascript.php", "js") //dynamically load "javascript.php" as a JavaScript file
	loadjscssfile("css/bootstrap.css", "css") ////dynamically load and add this .css file
	loadjscssfile("css/styles.css", "css") ////dynamically load and add this .css file
	loadjscssfile("css/font-awesome.min.css", "css") ////dynamically load and add this .css file
	</script>
	<!--END of css import-->
	<!--END of SCRIPTS-->		
</body>
</html>