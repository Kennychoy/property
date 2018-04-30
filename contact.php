<?php require_once "header.php"; ?>
	
	<!--   *********************separator************************   -->
	
	<div id="subpage-news" class="subpage-top">
		<div class="container-fluid">
			<div class='page-name'>
				<h1>CONTACT</h1>
			</div>
		</div>
	</div>

	<!--   *********************separator************************   -->
	
	<div id="contact">
		<div class="container">			
			<div class="row">
				<div class="col-md-8">
					<div class="contact-title">Get in touch</div>
					<form action="#">
						<div class="form-group">
							<input type="name" class="form-control" id="comment-name" placeholder="Name" required>
							<input type="email" class="form-control" id="comment-email" placeholder="Email" required>
							<textarea type="text" class="form-control" id="comment-message" placeholder="Message" rows="8" required></textarea>
							<button type="submit" class="btn">SEND MESSAGE</button>
						</div>
					</form>
				</div>
				<div class="col-md-4">
					<div class="contact-title">Join our team</div>
					<div class="join-description">In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum. Etiam eu purus nec eros varius luctus. Praesent finibus risus facilisis ultricies. Etiam eu purus nec eros varius luctus.</div>
					<div class="contact-icons">
						<div class="icons-details"><span><i class="fas fa-map-marker-alt"></i></span>No. 2, Main St., Somewhere</div>
						<div class="icons-details"><span><i class="fas fa-mobile-alt"></i></span>+12 345 678 999</div>
						<div class="icons-details"><span><i class="far fa-envelope"></i></span>abc@company.com</div>
					</div>
				</div>
			</div> <!-- row -->
			
			<div class="row">
				<div class="col-xs-12" id="contact-map">
					<iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyArn0-WSvjJHMR2zL903wk3HLGlbnx01XA&q=Space+Needle,Seattle+WA" allowfullscreen></iframe>
				</div>
			</div> <!-- row -->
		</div> <!-- container -->
	</div> <!-- #contact -->
	
	<!--   *********************separator************************   -->
	
<?php require_once "footer.php"; ?>