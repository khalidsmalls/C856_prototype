<?php 
	$page_title = 'About Taniti';
	require('BreadcrumbGenerator.php');
	$breadcrumbs = breadcrumbs();
	include('includes/header.html');
?>

<div class="mt-2 hero-img">
	<picture>
		<source media="(min-width: 812px)" srcset="../assets/images/charleston-lg.jpg">
		<source media="(min-width: 422px)" srcset="../assets/images/charleston-md.jpg">
		<img class="img-fluid" src="../assets/images/charleston-sm.jpg" alt="">
	</picture>

	<div class="p-1" id="about-taniti" style="background-color:#424242aa;border-radius:3%;">
		<h1 class="display-1 text-light">About Taniti</h1>
	</div>
</div>

<div class="row mt-2 mx-1 justify-row-md">
	<section class="col-xs-12 col-md-6 p-2 bg-translucent" id="history-and-culture">
		<div class="d-flex justify-content-center justify-content-md-start">
			<h2>History and Culture</h2>
		</div>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat.</p>
		<h4>Tanitian Culture</h4>
		<p>Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<h4>Holidays</h4>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat.</p>
		<div class="d-flex justify-content-center justify-content-sm-end">
			<button class="btn cta-btn me-3" onclick="">
				Learn More
			</button>
		</div>
	</section>
	<section class="col-xs-12 col-md-6 mt-2 mt-sm-0 p-2 bg-translucent" id="government">
		<div class="d-flex justify-content-center justify-content-md-start">
			<h2>Government</h2>
		</div>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat.</p>
		<h4>Currency</h4>
		<p>Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<h4>Health Care</h4>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat.</p>
		<div class="d-flex justify-content-center justify-content-sm-end">
			<button class="btn cta-btn me-3" onclick="">
				Learn More
			</button>
		</div>
	</section>
</div>

<div class="row mt-2 mx-1 justify-row-md">
	<section class="col-xs-12 col-md-6 p-2 bg-translucent pos-relative" id="geography">
		<div class="d-flex justify-content-center justify-content-md-start">
			<h2>Geography</h2>
		</div>
		<p>Taniti is a small, tropical island in the Pacific. While the island has an area of less than 500 square miles, the terrain is varied and includes both sandy and rocky beaches, a small but safe harbor, lush tropical rainforests, and a mountainous interior that includes a small, active volcano.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
		<div class="d-flex justify-content-center justify-content-sm-end btn-absolute">
			<button class="btn cta-btn me-3" onclick="">
				Learn More
			</button>
		</div>
	</section>
	<section class="col-xs-12 col-md-6 mt-2 mt-sm-0 p-2 bg-translucent" id="entertainment">
		<div class="d-flex justify-content-center justify-content-md-start">
			<h2>Entertainment</h2>
		</div>
		<p>Most people visit Taniti to enjoy the beaches, explore the rainforest, and to visit the volcano. However, there are other things to do, including visiting a local history museum, going on chartered fishing tours, snorkeling, zip-lining in the rainforest, visiting several pubs, including a microbrewery, dancing at a new dance club, seeing a movie, taking helicopter rides, playing at an arcade, visiting art galleries, and bowling. Also, a nine-hole golf course should be operational by next year. Many of these activities are located in Merriton Landing, which is a rapidly developing area on the north side of Yellow Leaf Bay. </p>
		<div class="d-flex justify-content-center justify-content-sm-end">
			<button class="btn cta-btn me-3" onclick="">
				Learn More
			</button>
		</div>
	</section>
</div>

<?php 
	include('includes/footer.html');
?>