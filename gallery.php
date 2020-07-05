<?php include('header.php'); ?>

<section class="page-title-bar bgcover overlay">
	<div class="container">
		<div class="inner-title">
			<h1>Gallery</h1>
		</div>
	</div>
</section>

<section class="gallery main-content">
	<div class="container">
		<div class="row">
			<?php for($i=0;$i<=6;$i++){ ?>
			<div class="col-lg-4">
				<a href="inner-gallery.php">
					<div class="gallery-box">
						<div class="gallery-pic bgcover" style="background-image: url('assets/image/one.jpg');">
							<div class="on-hover">
								<p>First Trip</p>
							</div>		
						</div>
					</div>
				</a>
			</div>
			<div class="col-lg-4">
				<a href="">
					<div class="gallery-box">
						<div class="gallery-pic bgcover" style="background-image: url('assets/image/tw.jpg');">
							<div class="on-hover">
								<p>Second Trip</p>
							</div>		
						</div>
					</div>
				</a>
			</div>
			<?php } ?>
			<nav aria-label="Page navigation example">
			 	<ul class="pagination">
			    	<li class="page-item">
			      		<a class="page-link" href="#" aria-label="Previous">
				       	 	<span aria-hidden="true">&laquo;</span>
				        	<span class="sr-only">Previous</span>
			      		</a>
			   	 	</li>
			    	<li class="page-item"><a class="page-link" href="#">1</a></li>
			    	<li class="page-item"><a class="page-link" href="#">2</a></li>
			    	<li class="page-item"><a class="page-link" href="#">3</a></li>
			    	<li class="page-item">
			      	<a class="page-link" href="#" aria-label="Next">
				        <span aria-hidden="true">&raquo;</span>
				        <span class="sr-only">Next</span>
			      	</a>
			    	</li>
			  	</ul>
			</nav>
		</div>
	</div>
</section>

<?php include('footer.php'); ?>