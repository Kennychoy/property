<?php require_once("header.php"); ?>
	
	<!--   *********************separator************************   -->
	
	<div id="subpage-news" class="subpage-top">
		<div class="container-fluid">
			<div class='page-name'>
				<h1>NEWS</h1>
			</div>
		</div>
	</div>

	<!--   *********************separator************************   -->
	
	<div id="news">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-xs-12">
				
					<div class="news-individual">
						<div class="individual-img"><img src="images/house1.jpeg"></img></div>
						<div class="individual-date">
							<div class="individual-day">18</div>
							<div class="individual-month">Dec</div>
						</div>
						
						<div class="individual-info">
							<div class="individual-headline"><a href="#">I AM ANOTHER HEADLINE</a></div>
							<span class="individual-author"><a href="#">Who Else</a></span> | 
							<span class="news-comment">
								<a href="#">
									<span class="news-comment-count">2</span> <span class="comment-singular-plural">comments</span>
								</a>
							</span>
						</div>
						
						<div class="individual-content">
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
							<div class="individual-highlight"><span>L</span>orem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum"</div>
							<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia</p>
							<p>Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance.</p>
						</div>
					</div> <!-- .news-individual -->
					
					<div class="individual-comments">
						<div class="comments-title">Comments</div>
						
						<div class="individual-comment">
							<div class="comment-img"><img src="images/people1.jpeg"></img></div>
							<div class="comment-info">
								<div class="comment-subtle">
									<span class="commentor">Alan Smith</span> | <span class="comment-date">Jan 11, 2018</span> | <span class="comment-reply">Reply</span>
								</div>
								<div class="comment-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</div>
							</div>
						</div>
						
						<div class="individual-comment">
							<div class="comment-img"><img src="images/people1.jpeg"></img></div>
							<div class="comment-info">
								<div class="comment-subtle">
									<span class="commentor">Alan Smith</span> | <span class="comment-date">Jan 11, 2018</span> | <span class="comment-reply">Reply</span>
								</div>
								<div class="comment-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</div>
							</div>
						</div>
						
					</div> <!-- .individual-comments -->
					
					<div class="leave-comment">
						<div class="leave-comment-title">Leave a comment</div>
						<form action="#">
							<div class="form-group">
								<input type="name" class="form-control" id="comment-name" placeholder="Name" required>
								<input type="email" class="form-control" id="comment-email" placeholder="Email" required>
								<textarea type="text" class="form-control" id="comment-message" placeholder="Message" rows="8" required></textarea>
								<button type="submit" class="btn">SEND MESSAGE</button>
							</div>
						</form>
					</div> <!-- leave-comments -->
					
				</div> <!-- col-md-8 -->
				
				<div class="col-md-4 col-xs-12" id="news-sidebar">
				
					<div class="archives">
						<div class="sidebar-title">Archives</div>
						<ul>
							<li><a href="#">Backyard Decoration</a></li>
							<li><a href="#">Sales in Oct</a></li>
							<li><a href="#">Property Talk</a></li>
							<li><a href="#">Promotion in Somewhere</a></li>
							<li><a href="#">Stamp Tax</a></li>
						</ul>
					</div> <!-- archives -->
					
					<div id="latest-posts">
						<div class="sidebar-title">Latest Posts</div>
						<div class="latest-posts-single">
							<div class="latest-posts-single-img"><img src="images/people1.jpeg"></img></div>
							<div class="latest-posts-single-title"><a href="#">I am just a headline</a></div>
							<div class="latest-posts-single-info"><a href="#">By Somebody Else | 3 comments</a></div>
						</div>
						<div class="latest-posts-single">
							<div class="latest-posts-single-img"><img src="images/people2.jpeg"></img></div>
							<div class="latest-posts-single-title"><a href="#">I am just a headline</a></div>
							<div class="latest-posts-single-info"><a href="#">By Somebody Else | 3 comments</a></div>
						</div>
						<div class="latest-posts-single">
							<div class="latest-posts-single-img"><img src="images/people3.jpeg"></img></div>
							<div class="latest-posts-single-title"><a href="#">I am just a headline</a></div>
							<div class="latest-posts-single-info"><a href="#">By Somebody Else | 3 comments</a></div>
						</div>
					</div> <!-- latest-posts -->
					
					<div id="tags-cloud">
						<div class="sidebar-title">Tags</div>
						<div class="tags-container">
							<div class="tags">Forestall</div>
							<div class="tags">Garrulity</div>
							<div class="tags">Snare</div>
							<div class="tags">Stymie</div>
							<div class="tags">Prolix</div>
							<div class="tags">Wince</div>
							<div class="tags">Lithe</div>
							<div class="tags">Sententious</div>
							<div class="tags">Servile</div>
							<div class="tags">Duress</div>
							<div class="tags">Facetious</div>
							<div class="tags">Imminent</div>
						</div>
					</div> <!-- tags-cloud -->
					
				</div> <!-- #news-sidebar -->
				
			</div> <!-- row -->
		</div> <!-- container -->
	</div> <!-- news -->
	
	<!--   *********************separator************************   -->
	
<?php require_once("footer.php"); ?>