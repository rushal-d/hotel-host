<?php
include('header.php');
?>

<section class="banner" id="top">
	<div class="owl-carousel owl-theme">
		<div class="item bgcover overlay" style="background-image: url('assets/image/one.jpg');">
			<div class="banner-text">
                <h1>Hello.Salut.Hola</h1>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                    et magnis dis parturient montes, nascetur ridiculus mus. 
                    Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, 
                    fringilla vel, aliquet nec, vulputate</p>
                <a href="myModal" class="btn my-btn" data-toggle="modal" type="button" data-target="#myModal">Book Now</a>
			</div>
		</div>
		<div class="item bgcover overlay" style="background-image: url('assets/image/tw.jpg');">
			<div class="banner-text">
				<h1>Hello.Salut.Hola</h1>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                    et magnis dis parturient montes, nascetur ridiculus mus. 
                    Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, 
                    fringilla vel, aliquet nec, vulputate</p>
                <a href="#" class="btn my-btn" data-toggle="modal" data-target="myModal">Book Now</a>

			</div>
		</div>
	</div>
</section>

<section class="intro wow bounceInRight" data-wow-offset="2" data-wow-duration="1s" data-wow-delay="1s">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="text-wrapper">
					<p class="title-heading">Raising comfort to the highest level</p>
					<h3>Welcome to Hotel Attic Empire</h3>
					<p class="body-part">
						Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis
					</p>
					<p class="body-part">
						quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis
					</p>
					<a href="#" class="btn my-btn">Read More</a>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="img-wrapper">
					<div class="img-1 bgcover">
						
					</div>
					<div class="img-2 bgcover">
						
					</div>	
				</div>
			</div>
		</div>
	</div>
</section>

<section class="timer">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-sm-12">
				<div class="timer-box">
					<i class="fas fa-user"></i>
					<h3 class="counter">200</h3>
					<h4>Total Clients</h4>
				</div>
			</div>
			<div class="col-lg-3 col-sm-12">
				<div class="timer-box">
					<i class="fas fa-user"></i>
					<h3 class="counter">50</h3>
					<h4>Total Rooms</h4>
				</div>
			</div>
			<div class="col-lg-3 col-sm-12">
				<div class="timer-box">
					<i class="fas fa-user"></i>
					<h3 class="counter">200</h3>
					<h4>Satisfied Clients</h4>
				</div>
			</div>
			<div class="col-lg-3 col-sm-12">
				<div class="timer-box">
					<i class="fas fa-user"></i>
					<h3 class="counter">200</h3>
					<h4>Happy Clients</h4>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="rooms main-content wow bounceInLeft" data-wow-duration="1s" data-wow-delay="1s">
	<div class="container">
		<div class="row">
			<div class="col-lg-10">
				<div class="heading">
					<p class="title-heading">Raising comfort to the highest level</p>
					<h3>Rooms & Suites</h3>
				</div>
			</div>
			<div class="col-lg-2">
				<a href="#" class="my-btn">View Rooms</a>
			</div>
		</div>
		<div class="row">
			<?php for($i = 0; $i<=2; $i++) { ?>
				<div class="col-lg-4">
					<div class="room-card bgcover">
						<div class="card-hover">
							<h4>Superior Double Room</h4>
							<p>6000/per night</p>
						</div>
					</div>
				</div>
			<?php } ?>				
		</div>
	</div>	
</section>

<section class="keichaina bgcover overlay">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 offset-lg-1">
				<div class="keichaina-wrapper">
					<div class="keichaina-icon">
						<i class="fas fa-person-booth"></i>
					</div>
					<div class="keichaina-text">
						<h3>GREAT THINGS IN BUSINESS ARE NEVER DONE BY ONE PERSON.<span>THEY’RE DONE BY A TEAM OF PEOPLE.</span></hh3>
						<p>We are committed to providing our customers with exceptional service while
						offering our employees the best training.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="weprovide">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="aboutus-title">
					<h2>Services We Provide</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4">
				<div class="service-box text-center">
					<div class="service-icon">
						<i class="fas fa-wifi"></i>
					</div>
					<h4>Wi-Fi Services</h4>
					<p>We provide free wi-fi services so that our clients are connected to the world 24/7.</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="service-box text-center">
					<div class="service-icon">
						<i class="fas fa-parking"></i>
					</div>
					<h4>Parking Services</h4>
					<p>We provide free wi-fi services so that our clients are connected to the world 24/7.</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="service-box text-center">
					<div class="service-icon">
						<i class="fas fa-utensils"></i>
					</div>
					<h4>Restaurants</h4>
					<p>We provide free wi-fi services so that our clients are connected to the world 24/7.</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="service-box text-center">
					<div class="service-icon">
						<i class="fas fa-car"></i>
					</div>
					<h4>Commute Services</h4>
					<p>We provide free wi-fi services so that our clients are connected to the world 24/7.</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="service-box text-center">
					<div class="service-icon">
						<i class="fas fa-music"></i>
					</div>
					<h4>Events & Seminars</h4>
					<p>We provide free wi-fi services so that our clients are connected to the world 24/7.</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="service-box text-center">
					<div class="service-icon">
						<i class="fas fa-route"></i>
					</div>
					<h4>Travel Services</h4>
					<p>We provide free wi-fi services so that our clients are connected to the world 24/7.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- <section class="services">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="heading text-left">
					<p class="title-heading">Services we provide</p>
					<h3>Services</h3>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="sliders">
					<div class="client-box">
						<i class="fas fa-wifi"></i>
						<p>Wi-Fi</p>
					</div>
					<div class="client-box">
						<i class="fas fa-parking"></i>
						<p>Parking</p>
					</div>
					<div class="client-box">
						<i class="fas fa-utensils"></i>
						<p>Restaurant</p>
					</div>
					<div class="client-box">
						<i class="fas fa-car"></i>
						<p>Transportation</p>
					</div>
					<div class="client-box">
						<i class="fas fa-music"></i>
						<p>Events</p>
					</div>
					<div class="client-box">
						<i class="fas fa-route"></i>
						<p>Travel</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->

<section class="partners">	
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-sm-12">
				<div class="heading text-left">
					<p class="title-heading">Our precious partners</p>
					<h3>Partners</h3>
				</div>
			</div>
		</div>
		<div class="row">
			<?php for($i = 0; $i <= 5; $i++){ ?>
				<div class="col-lg-2 col-sm-12">
					<div class="partner-box bgcover">
						<img src="assets/image/intro3.jpg" height="100%">
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</section>

<section class="testimonial">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="heading text-left">
					<p class="title-heading">Reviews left by the customers</p>
					<h3>Testimonial</h3>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 offset-lg-5">
				<div class="testimonial-wrapper">
					<div class="testimonial-pic bgcover">
						<img src="assets/image/intro4.jpg" height="80%">
					</div>
					<div class="testimonial-text">
						<p>
						"Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec." 
						</p>
					</div>
					<div class="user">
						<div class="user-pic bgcover">
							<img src="assets/image/por1.jpg" width="100%" height="100%">
						</div>
						<div class="user-info">
							<h6>Rujan Dangol</h6>
							<p>Neverland</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Book a Room</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="name" class="col-form-label">Name:</label>
            <input type="text" class="form-control" id="name">
          </div>
          <div class="form-group">
            <label for="date" class="col-form-label">Date:</label>
            <input id="datepicker" type="text" class="form-control" id="date">
          </div>
          <div class="form-group">
            <label for="contact" class="col-form-label">Contact No.:</label>
            <input type="text" class="form-control" id="contact">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Confirm</button>
      </div>
    </div>
  </div>
</div>



<?php
include('footer.php');
?>