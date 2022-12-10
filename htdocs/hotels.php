<?php 
	$page_title = 'Hotels';
	require('BreadcrumbGenerator.php');
	$breadcrumbs = breadcrumbs();
	include('includes/header.html');
?>

<div class="bg-translucent text-secondary text-center mt-2">
	<h1 class="display-1">Hotels</h1>
</div>

<div class="row mt-2 mx-1">
	<section class="col-xs-12 col-md-6 p-2 bg-translucent" id="5-star-resort">
		<div class="d-flex justify-content-center justify-content-md-start">
			<h2>5-start Resort</h2>
		</div>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<div class="d-flex justify-content-center justify-content-sm-end">
			<button class="btn cta-btn me-3" onclick="">
				View Booking Options
			</button>
		</div>
	</section>
	<div class="col-xs-12 col-md-6 mt-2 mt-sm-0">
		<picture>
			<source media="(min-width: 1200px)" srcset="../assets/images/resort-pool-lg.jpg">
			<source media="(min-width: 422px)" srcset="../assets/images/resort-pool-md.jpg">
			<img class="img-fluid" src="../assets/images/resort-pool-sm.jpg" alt="">
		</picture>
	</div>
</div>

<div class="row mt-2 mx-1">
	<section class="col-xs-12 col-md-6 p-2 bg-translucent" id="yellow-leaf-bay">
		<div class="d-flex justify-content-center justify-content-md-start">
			<h2>Hotels near Yellow Leaf Bay</h2>
		</div>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<div class="d-flex justify-content-center justify-content-sm-end">
			<button class="btn cta-btn me-3" onclick="">
				View Booking Options
			</button>
		</div>
	</section>
	<section class="col-xs-12 col-md-6 mt-2 mt-sm-0 p-2 bg-translucent" id="merriton-landing">
		<div class="d-flex justify-content-center justify-content-md-start">
			<h2>Hotels near Merriton Landing</h2>
		</div>
		<p class="pb-lg-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<div class="d-flex justify-content-center justify-content-sm-end">
			<button class="btn cta-btn me-3" onclick="">
				View Booking Options
			</button>
		</div>
	</section>
</div>

<div class="row mt-2 mx-1">
	<section class="col-xs-12 col-md-6 p-2 bg-translucent" id="bed-and-breakfasts" id="taniti-city">
		<div class="d-flex justify-content-center justify-content-md-start">
			<h2>Taniti City Hotels</h2>
		</div>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<div class="d-flex justify-content-center justify-content-sm-end">
			<button class="btn cta-btn me-3" onclick="">
				View Booking Options
			</button>
		</div>
	</section>
	<div class="col-xs-12 col-md-6 mt-2 mt-sm-0">
		<picture>
			<source media="(min-width: 1200px)" srcset="../assets/images/city-hotel-lg.jpg">
			<source media="(min-width: 422px)" srcset="../assets/images/city-hotel-md.jpg">
			<img class="img-fluid" src="../assets/images/city-hotel-sm.jpg" alt="">
		</picture>
	</div>
</div>

<div class="row mt-2 mx-1">
	<section class="col-xs-12 col-md-6 p-2 bg-translucent" id="bed-and-breakfasts">
		<div class="d-flex justify-content-center justify-content-md-start">
			<h2>Bed &amp; Breakfasts</h2>
		</div>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<div class="d-flex justify-content-center justify-content-sm-end">
			<button class="btn cta-btn me-3" onclick="">
				View Booking Options
			</button>
		</div>
	</section>
	<div class="col-xs-12 col-md-6 mt-2 mt-sm-0">
		<picture>
			<source media="(min-width: 1200px)" srcset="../assets/images/bed-and-breakfast-lg.jpg">
			<source media="(min-width: 422px)" srcset="../assets/images/bed-and-breakfast-md.jpg">
			<img class="img-fluid" src="../assets/images/bed-and-breakfast-sm.jpg" alt="">
		</picture>
	</div>
</div>


<?php 
	include('includes/footer.html');
?>