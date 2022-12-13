<?php 
	$page_title = 'VisitTaniti.com';
	require('BreadcrumbGenerator.php');
	$breadcrumbs = breadcrumbs();
	require('includes/header.html');
?>
	
	<div class="mt-2 hero-img">
		<picture>
			<source media="(min-width: 1200px)" srcset="../assets/images/homepage-panorama-lg.jpg">
			<source media="(min-width: 422px)" srcset="../assets/images/homepage-panorama-md.jpg">
			<img class="img-fluid" src="../assets/images/homepage-panorama-sm.jpg" alt="">
		</picture>

		<h1 class="homepage-headline display-1">This is Taniti</h1>

		<div class="call-to-action row col-xs-12 col-sm-6 col-md-5 col-xxl-4 mt-2 py-2" id="cta-home">
			<div class="col-xs-6 col-md-6">
				<h3 class="hero-text">Your dream vacation awaits</h3>
			</div>
			<div class="col-xs-6 col-md-5 cta-btn-div cta-btn-div ps-0">
				<button class="btn cta-btn" id="discover-taniti">Discover Taniti</button>
			</div>
		</div>
	</div>

	<div class="row mt-2 mx-1">
		<section class="col-xs-12 col-md-6 p-2 bg-translucent">
			<div class="d-flex justify-content-center justify-content-md-start">
				<h2>Welcome to Taniti</h2>
			</div>
			<p>Taniti is a small, tropical island in the Pacific. While the island has an area of less than 500 square miles, the terrain is varied and includes both sandy and rocky beaches, a small but safe harbor, lush tropical rainforests, and a mountainous interior that includes a small, active volcano. Taniti has an indigenous population of about 20,000. Until a recent increase in tourism, most the Tanitian economy was dominated by fishing or agriculture.</p>
			<div class="d-flex justify-content-center justify-content-sm-end">
				<button class="btn cta-btn me-3" onclick="">
					Explore Taniti
				</button>
			</div>
		</section>
		<div class="col-xs-12 col-md-6 mt-2 mt-sm-0 justify-content-center align-items-center">
			<picture>
				<source media="(min-width: 1200px)" srcset="../assets/images/volcano2-lg.jpg">
				<source media="(min-width: 422px)" srcset="../assets/images/volcano2-md.jpg">
				<img class="img-fluid" src="../assets/images/volcano2-sm.jpg" alt="">
			</picture>
		</div>
	</div>

	<div class="row mt-2 mx-1 justify-content-between justify-row-md">
		<section class="col-xs-12 col-md-6 p-2 bg-translucent">
			<div class="d-flex justify-content-center justify-content-md-start">
				<h2>Accomodations</h2>
			</div>
			<h4>Travel</h4>
			<p>Almost all visitors arrive to Taniti by air, though some arrive on a small cruise ship that docks in Yellow Leaf Bay for one night per week. Taniti is served by a small airport that can accommodate small jets and propeller planes. Taniti is in the process of expanding the airport so larger jets will be able to land on the island within the next few years.</p>
			<h4>lodging</h4>
			<p>Taniti has a wide variety of lodging that ranges from an inexpensive hostel to one large, four-star resort. There are many small, family-owned hotels and a growing number of bed and breakfasts. All types of lodging are strictly regulated and regularly inspected by the Tanitian government.</p>
			<div class="d-flex justify-content-center justify-content-sm-end">
				<button class="btn cta-btn me-3" onclick="">
					View Booking Options
				</button>
			</div>
		</section>
		<section class="col-xs-12 col-md-6 mt-2 mt-sm-0 p-2 bg-translucent pos-relative" id="landmarks">
			<div class="d-flex justify-content-center justify-content-md-start">
				<h2>Landmarks</h2>
			</div>
			<p>Most tourists spend most of their time in Taniti City, which boasts native architecture and nearby white, sandy beaches that encircle Yellow Leaf Bay. Other popular activities include boat or bus tours of the island, hikes in the rainforest, or visits to Taniti’s active volcano. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			<div class="d-flex justify-content-center justify-content-sm-end btn-absolute">
				<button class="btn cta-btn me-3" onclick="">
					Explore Landmarks
				</button>
			</div>
		</section>
	</div>

<?php 
	include('includes/footer.html');
?>