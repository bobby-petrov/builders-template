<?php
  if ($_POST["submit"]) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $human = intval($_POST['human']);
    $from = "$email\n"; 
    $to = 'eran@primenetuk.com'; 
    $subject = 'Iquiry from www.fulhambuilder.co.uk';
    
    $body ="From: $name\n E-Mail: $email\n Message: $message\n";
    // Check if name has been entered
    if (!$_POST['name']) {
      $errName = 'Please enter your name';
    }
    
    // Check if email has been entered and is valid
    if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $errEmail = 'Please enter a valid email address';
    }
    
    //Check if message has been entered
    if (!$_POST['message']) {
      $errMessage = 'Please enter your message';
    }
    //Check if simple anti-bot test is correct
    if ($human !== 5) {
      $errHuman = 'Your anti-spam is incorrect';
    }
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
  if (mail ($to, $subject, $body, $from)) {
    $result='<div class="alert alert-success">Thank You! We will be in touch</div>';
  } else {
    $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
  }
}
  }
?>

<?php include('header.php'); ?>
		<!--END of header-->

		<!--START of slider-->
		<div class="row">
			<div class="col-sm-12">						
				<div class="jumbotron slider top-border bottom-border">	
					<div class="inner-shadow-box">
						<h1>Contact <?php include 'vars.php'; echo "$area $job" ?></h1>
					</div>					
				</div>
			</div>
		</div>
		<!--END of slider-->			
		
		<div class="row row-correction">
			<div class="col-sm-12 bkg-white" style="padding: 25px 0;">
				<div class="col-sm-4">
					<div class="col-sm-12 contact"><i class="fa fa-home"></i> <?php include 'vars.php'; echo "$street"?></div>
					<div class="col-sm-12 contact"><i class="fa fa-map-marker"></i> Post code <?php include 'vars.php'; echo "$post_code"?></div>
					<div class="col-sm-12 contact"><i class="fa fa-phone"></i><a href="tel:<?php include 'vars.php'; echo "$phone"?>"> <?php include 'vars.php'; echo "$phone"?></a></div>
					<div class="col-sm-12 contact"><i class="fa fa-envelope"></i><a href="mailto:<?php include 'vars.php'; echo "$email"?>" style="text-decoration: none;"> <?php include 'vars.php'; echo "$email"?></a></div>
				</div>
				<div class="col-sm-8">
					<form class="form-horizontal" role="form" method="post" action="contacts.php">
						<div class="form-group">
							<label for="name" class="col-sm-2 control-label">Name</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
								<?php echo "<p class='text-danger'>$errName</p>";?>
							</div>
						</div>
						<div class="form-group">
							<label for="email" class="col-sm-2 control-label">Email</label>
							<div class="col-sm-10">
								<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
								<?php echo "<p class='text-danger'>$errEmail</p>";?>
							</div>
						</div>
						<div class="form-group">
							<label for="message" class="col-sm-2 control-label">Message</label>
							<div class="col-sm-10">
								<textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
								<?php echo "<p class='text-danger'>$errMessage</p>";?>
							</div>
						</div>
						<div class="form-group">
							<label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
								<?php echo "<p class='text-danger'>$errHuman</p>";?>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-10 col-sm-offset-2">
								<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-10 col-sm-offset-2">
								<?php echo $result; ?>	
							</div>
						</div>
					</form>
				</div>
			</div>				
		</div>

		<!--START of footer section-->
		<?php include('footer.php'); ?>

