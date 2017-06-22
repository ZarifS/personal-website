<?php

	if (isset($_REQUEST['email']))  {
  
    //Email information
    $admin_email = "zarif.shahriar@hotmail.com";
    $email = $_REQUEST['email'];
    $subject = $_REQUEST['subject'];
    $comment = $_REQUEST['message'];
    
    //send email
    mail($admin_email, "$subject", $comment, "From:" . $email);
    
    //Email response
    echo "Thank you for contacting us!";
  }

?>

 <html>

<article id="contact">
				<h2 class="major">Contact</h2>
				<form method="post" action="#">
					<div class="field half first">
						<label for="subject">Subject</label>
						<input type="text" subject="subject" id="subject" />
					</div>
					<div class="field half">
						<label for="email">Your Email</label>
						<input type="text" name="email" id="email" />
					</div>
					<div class="field">
						<label for="message">Message</label>
						<textarea name="message" id="message" rows="4"></textarea>
					</div>
					<ul class="actions">
						<li><input type="submit" name="submit" value="Send Message" class="special" /></li>
						<li><input type="reset" value="Reset" /></li>
					</ul>
				</form>
				<ul class="icons">
					<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
					<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
					<li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
				</ul>
</article>



 </html>