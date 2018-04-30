<?php require_once("header.php"); ?>

	<div id="carousel">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner">
			<div class="item active">
				<div class="item-mask"></div>
				<img src="images/house1.jpeg">
			</div>

			<div class="item">
				<div class="item-mask"></div>
				<img src="images/house2.jpeg">
			</div>

			<div class="item">
				<div class="item-mask"></div>
				<img src="images/house3.jpeg">
			</div>
		  </div>
		  
		  <div id="carousel-text">YOU <span>DESERVE</span> IT!</div>

		  <!-- Left and right controls -->
		  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
			<span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#myCarousel" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
			<span class="sr-only">Next</span>
		  </a>
		</div>
		
		<div id="three-boxes">
			<div class="three-boxes-individual">
				<a href="#">
					<div class="boxes-icon">
						<span><i class="fas fa-child"></i></span>
					</div>
					<div class="boxes-description">
						<div class="inner-boxes-description">
							<h3>Free Children</h3>
							<h5>VIEW MORE</h5>
						</div>
					</div>
				</a>
			</div>
			<div class="three-boxes-individual">
				<a href="#">
					<div class="boxes-icon">
						<span><i class="fas fa-bath"></i></span>
					</div>
					<div class="boxes-description">
						<div class="inner-boxes-description">
							<h3>Free Bathroom</h3>
							<h5>VIEW MORE</h5>
						</div>
					</div>
				</a>
			</div>	
			<div class="three-boxes-individual">
				<a href="#">
					<div class="boxes-icon">
						<span><i class="fas fa-bus"></i></span>
					</div>
					<div class="boxes-description">
						<div class="inner-boxes-description">
							<h3>Free Shuttle Bus</h3>
							<h5>VIEW MORE</h5>
						</div>
					</div>
				</a>
			</div>
		</div> <!-- #three-boxes -->
		
	</div> <!-- carousel -->
	
	<div id="popular">
		<div class="container">
		
			<div id="popular-title">
				<h1>Popular Estate</h1>
			</div>
		
			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="popular-photo"><img class="img-responsive" src="images/house1.jpeg"></div>
					<div class="popular-description">
						<div class="popular-description-inner">
							<h3>No.2, Main St</h3>
							<h4>Watching sunset</h4>
						</div>
					</div>
					<div class="popular-people">
						<div class="popular-people-face"><img class="img-responsive img-circle" src="images/people1.jpeg"></div>
						<div class="popular-people-name">David Beckham, <span>Specialist</span></div>
						<div class="popular-people-price">
							<div class="amount">$99</div>
						</div>	
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="popular-photo"><img class="img-responsive" src="images/house2.jpeg"></div>
					<div class="popular-description">
						<div class="popular-description-inner">
							<h3>No.5, Side St</h3>
							<h4>Watching sunrise</h4>
						</div>
					</div>
					<div class="popular-people">
						<div class="popular-people-face"><img class="img-responsive img-circle" src="images/people2.jpeg"></div>
						<div class="popular-people-name">Michael Jordan, <span>Specialist</span></div>
						<div class="popular-people-price">
							<div class="amount">$99</div>
						</div>	
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="popular-photo"><img class="img-responsive" src="images/house3.jpeg"></div>
					<div class="popular-description">
						<div class="popular-description-inner">
							<h3>No.8, Next St</h3>
							<h4>Watching Big Bro</h4>
						</div>
					</div>
					<div class="popular-people">
						<div class="popular-people-face"><img class="img-responsive img-circle" class="img-responsive" src="images/people3.jpeg"></div>
						<div class="popular-people-name">Donald Trump, <span>Specialist</span></div>
						<div class="popular-people-price">
							<div class="amount">$99</div>
						</div>	
					</div>
				</div>
			</div> <!-- row -->
		</div> <!-- container -->
	</div> <!-- popular -->
	
	<div id="reg-form">
		<div class="container-fluid">
			<div class="row">
			
				<div class="col-md-6 col-xs-12" id="reg">
					<div id="reg-info">
						<div id="reg-title">
							Register now and get a discount <span>50%</span> discount until 1 January
						</div>
						<div id="reg-description">
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
						</div>
						<div id="reg-button">
							<button>REGISTER NOW</button>
						</div>						
					</div>
				</div>
				
				<div class="col-md-6 col-xs-12" id="form">
					<div id="form-wrapper">
						<div id="form-wrapper-inner">
							<div id="form-headline">
								<h3>Search For Your House</h3>
							</div>
							<div id="input-field">
								<input class="input-text input-stuffs" type="text" placeholder="Location"></input>
								<input class="input-text input-stuffs" type="text" placeholder="Size"></input>
								<input class="input-text input-stuffs" type="text" placeholder="Direction"></input>
								<input id="input-button" type="button" class="input-stuffs" value="SEARCH APARTMENT"></input>
							</div>
						</div>
					</div>
				</div>
				
			</div> <!-- row -->
		</div> <!-- container-fluid -->
	</div> <!-- reg-form -->
	
	<div id="our-service">
		<div class="container">
		
			<div id="out-service-title">
				<h1>Our Service</h1>
			</div>
			
			<div class="row">
			
				<div class="col-md-4 col-sm-6 col-xs-12">
					<div class="our-service-icon">
						<i class="fas fa-bus"></i>
					</div>
					<div class="our-service-headline">
						<h3>Online Courses</h3>
					</div>
					<div class="our-service-description">
						<p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12">
					<div class="our-service-icon">
						<i class="fas fa-bus"></i>
					</div>
					<div class="our-service-headline">
						<h3>Online Courses</h3>
					</div>
					<div class="our-service-description">
						<p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12">
					<div class="our-service-icon">
						<i class="fas fa-bus"></i>
					</div>
					<div class="our-service-headline">
						<h3>Online Courses</h3>
					</div>
					<div class="our-service-description">
						<p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12">
					<div class="our-service-icon">
						<i class="fas fa-bus"></i>
					</div>
					<div class="our-service-headline">
						<h3>Online Courses</h3>
					</div>
					<div class="our-service-description">
						<p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12">
					<div class="our-service-icon">
						<i class="fas fa-bus"></i>
					</div>
					<div class="our-service-headline">
						<h3>Online Courses</h3>
					</div>
					<div class="our-service-description">
						<p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12">
					<div class="our-service-icon">
						<i class="fas fa-bus"></i>
					</div>
					<div class="our-service-headline">
						<h3>Online Courses</h3>
					</div>
					<div class="our-service-description">
						<p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
					</div>
				</div>
				
			</div> <!-- row -->
		</div> <!-- container -->
	</div> <!-- our service -->
	
	<div id="quotes">
		<div id="quotes-inner">
			<div class="container-fluid">
				
				<div id="myCarousel2" class="carousel slide" data-ride="carousel">					
					
					<div id="myCarousel2-mask"></div>
					
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel2" data-slide-to="1"></li>
						<li data-target="#myCarousel2" data-slide-to="2"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner">
					
						<div id="quotes-headline">
							<h1 class="text-center">What the residents say...</h1>
						</div>
					
						<div class="item active">
							<img src="images/people1.jpeg" style="width:100%;">
							<div class="center-carousel">
								<div class="center-carousel-quotation"><h2>"</h2></div>
								<div class="center-carousel-quotes"><h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</h4></div>
								<div class="center-carousel-image"><img src="images/people1.jpeg"></img></div>
								<div class="center-carousel-name"><h3>David Backham</h3></img></div>
								<div class="center-carousel-title"><h4>Midfielder</h4></img></div>
							</div>
						</div>
						<div class="item">
							<img src="images/people2.jpeg" style="width:100%;">
							<div class="center-carousel">
								<div class="center-carousel-quotation"><h2>"</h2></div>
								<div class="center-carousel-quotes"><h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</h4></div>
								<div class="center-carousel-image"><img src="images/people2.jpeg"></img></div>
								<div class="center-carousel-name"><h3>C. Ronaldo</h3></img></div>
								<div class="center-carousel-title"><h4>Winger</h4></img></div>
							</div>
						</div>						
						<div class="item">
							<img src="images/people3.jpeg" style="width:100%;">
							<div class="center-carousel">
								<div class="center-carousel-quotation"><h2>"</h2></div>
								<div class="center-carousel-quotes"><h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</h4></div>
								<div class="center-carousel-image"><img src="images/people3.jpeg"></img></div>
								<div class="center-carousel-name"><h3>Roberto Carlos</h3></img></div>
								<div class="center-carousel-title"><h4>Wing-Back</h4></img></div>
							</div>
						</div>
					</div> <!-- carousel-inner -->
					
				</div> <!-- myCarousel2 -->
			</div> <!-- container -->
		</div> <!-- quotes-inner -->
	</div> <!-- quotes -->
	
	<div id="upcoming-events">
		<div id="upcoming-events-wrapper">		
			<div id="upcoming-events-title">
				<div id="upcoming-title">Upcoming Events</div>
			</div>
			<div class="container">
			
				<div class="row">
					<div class="col-md-2 col-sm-2 col-xs-4">
						<div class="upcoming-date">
							<div class="day">07</div>
							<div class="month">January</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-8">
						<div class="upcoming-details">						
							<div class="upcoming-name">Property Talk</div>
							<div class="upcoming-location">Center Park</div>
							<div class="upcoming-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</div>
						</div>
					</div>	
					<div class="col-md-4 col-sm-4 hidden-xs">
						<div class="upcoming-photo">
							<img src="images/house1.jpeg"></img>
						</div>
					</div>
				</div> <!-- row -->	
					
				<div class="row">
					<div class="col-md-2 col-sm-2 col-xs-4">
						<div class="upcoming-date">
							<div class="day">07</div>
							<div class="month">January</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-8">
						<div class="upcoming-details">						
							<div class="upcoming-name">Property Talk</div>
							<div class="upcoming-location">Center Park</div>
							<div class="upcoming-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</div>
						</div>
					</div>	
					<div class="col-md-4 col-sm-4 hidden-xs">
						<div class="upcoming-photo">
							<img src="images/house1.jpeg"></img>
						</div>
					</div>
				</div> <!-- row -->	
				
				<div class="row">
					<div class="col-md-2 col-sm-2 col-xs-4">
						<div class="upcoming-date">
							<div class="day">07</div>
							<div class="month">January</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-8">
						<div class="upcoming-details">						
							<div class="upcoming-name">Property Talk</div>
							<div class="upcoming-location">Center Park</div>
							<div class="upcoming-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</div>
						</div>
					</div>	
					<div class="col-md-4 col-sm-4 hidden-xs">
						<div class="upcoming-photo">
							<img src="images/house1.jpeg"></img>
						</div>
					</div>
				</div> <!-- row -->	

			</div>	<!-- container -->		
		</div> <!-- upcoming events wrapper -->
	</div> <!-- upcoming events -->
	
	<footer>
		<div id="footer-wrapper">
			<div class="container">
			
				<div id="subscribe-title">
					<h1>Subscribe to newsletter</h1>
				</div>
				
				<div id="subscribe-field">
					<div class="form-group input-group">
						<input type="text" placeholder="Email Address" class="form-control input-lg">
						<span class="input-group-addon">Subscribe</span>
					</div>
				</div>
				
				<div id="footer-stuffs">
					<div class="container">
						<div class="row">
							<div class="col-md-3 col-sm-6 col-xs-12">
								<div class="logo-name">
									<span class="glyphicon glyphicon-home"></span>
									<p>WebSiteName</p>
								</div>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
							</div>
							
							<div class="col-md-3 col-sm-6 col-xs-12">
								<div class="footer-list-title">
									Menu
								</div>
								<div class="footer-list">
									<ul>
										<li><a href="#">Home</a></li>
										<li><a href="#">About</a></li>
										<li><a href="#">Courses</a></li>
										<li><a href="#">News</a></li>
										<li><a href="#">Contact</a></li>
									</ul>
								</div>
							</div>
							
							<div class="col-md-3 col-sm-6 col-xs-12">
								<div class="footer-list-title">
									Useful Links
								</div>
								<div class="footer-list">
									<ul>
										<li><a href="#">Testimonials</a></li>
										<li><a href="#">FAQ</a></li>
										<li><a href="#">Community</a></li>
										<li><a href="#">Campus Pictures</a></li>
										<li><a href="#">Tuitions</a></li>
									</ul>
								</div>
							</div>
							
							<div class="col-md-3 col-sm-6 col-xs-12">
								<div class="footer-list-title">
									Contact
								</div>
								<div class="footer-list">
									<ul>
										<li>
											<a href="#">
												<span class="footer-icon">
													<i class="fab fa-algolia"></i>
												</span>
											#1, Main Road, Somewhere
											</a>
										</li>
										
										<li>
											<a href="#">
												<span class="footer-icon">
													<i class="fas fa-adjust"></i>
												</span>
											+12 345 678 999
											</a>
										</li>
										
										<li>
											<a href="#">
												<span class="footer-icon">
													<i class="fas fa-american-sign-language-interpreting"></i>
												</span>
											example@example.com
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- footer-stuffs -->
				
				<div id="footer-credits">
					<div class="row">
						<div class="col-md-6 col-xs-12">
							All the photos are free and downloaded from <span>Pexels</span>
						</div>
						
						<div class="col-md-4 col-md-offset-2 col-xs-12">
							<ul>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-facebook"></i></a></li>
								<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
								<li><a href="#"><i class="fab fa-youtube"></i></a></li>
								<li><a href="#"><i class="fab fa-weixin"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				
			</div>  <!-- container -->
		</div> <!-- footer-wrapper -->
	</footer> <!-- footer -->
	
</div> <!-- site wrapper -->
</body>
</html>