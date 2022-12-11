<?php 
	$page_title = 'Taniti Life';
	require('BreadcrumbGenerator.php');
	$breadcrumbs = breadcrumbs();
	include('includes/header.html');
?>


<div class="mt-2 hero-img">
	<picture>
		<source media="(min-width: 819px)" srcset="../assets/images/palms-lg.jpg">
		<source media="(min-width: 422px)" srcset="../assets/images/palms-md.jpg">
		<img class="img-fluid" src="../assets/images/palms-sm.jpg" alt="">
	</picture>

	<div class="attractions-headline p-2" style="background-color:#424242dd;border-radius:3%;">
		<h1 class="display-1 text-light">Attractions</h1>
	</div>
</div>

<div class="row mt-2 mx-1">
	<section class="col-xs-12 col-md-6 p-2 bg-translucent" id="taniti-city">
		<div class="d-flex justify-content-center justify-content-md-start">
			<h2>Taniti City Attractions</h2>
		</div>
		<p>Most tourists spend most of their time in Taniti City, which boasts native architecture and nearby white, sandy beaches that encircle Yellow Leaf Bay. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<div class="d-flex justify-content-center justify-content-sm-end">
			<button class="btn cta-btn me-3" onclick="">
				Explore Taniti City Attractions
			</button>
		</div>
	</section>
	<div class="col-xs-12 col-md-6 mt-2 mt-sm-0">
		<picture>
			<source media="(min-width: 1200px)" srcset="../assets/images/charleston2-lg.jpg">
			<source media="(min-width: 422px)" srcset="../assets/images/charleston2-md.jpg">
			<img class="img-fluid" src="../assets/images/charleston2-sm.jpg" alt="">
		</picture>
	</div>
</div>

<div class="row mt-2 mx-1">
	<div class="col-xs-12 col-md-6 mt-2 mt-sm-0">
		<picture>
			<source media="(min-width: 1200px)" srcset="../assets/images/rainforest-lg.jpg">
			<source media="(min-width: 422px)" srcset="../assets/images/rainforest-md.jpg">
			<img class="img-fluid" src="../assets/images/rainforest-sm.jpg" alt="">
		</picture>
	</div>
	<section class="col-xs-12 col-md-6 p-2 bg-translucent" id="rainforest-tours">
		<div class="d-flex justify-content-center justify-content-md-start">
			<h2>Rainforest Tours</h2>
		</div>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat.</p>
		<h4>Zip Line Adventure</h4>
		<p>Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<div class="d-flex justify-content-center justify-content-sm-end">
			<button class="btn cta-btn me-3" onclick="">
				Book a Tour Now
			</button>
		</div>
	</section>
</div>

<div class="row mt-2 mx-1">
	<section class="col-xs-12 col-md-6 p-2 bg-translucent" id="yellow-leaf-bay">
		<div class="d-flex justify-content-center justify-content-md-start">
			<h2>Yellow Leaf Bay Attractions</h2>
		</div>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat.</p>
		<h4>Merriton Landing</h4>
		<p>Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<div class="d-flex justify-content-center justify-content-sm-end">
			<button class="btn cta-btn me-3" onclick="">
				Explore Yellow Leaf Bay Attractions
			</button>
		</div>
	</section>
	<div class="col-xs-12 col-md-6 mt-2 mt-sm-0">
		<picture>
			<source media="(min-width: 1200px)" srcset="../assets/images/yellow-leaf-bay-lg.jpg">
			<source media="(min-width: 422px)" srcset="../assets/images/yellow-leaf-bay-md.jpg">
			<img class="img-fluid" src="../assets/images/yellow-leaf-bay-sm.jpg" alt="">
		</picture>
	</div>
</div>

<div class="row mt-2 mx-1">
	<div class="col-xs-12 col-md-6 mt-2 mt-sm-0">
		<picture>
			<source media="(min-width: 1200px)" srcset="../assets/images/volcano3-lg.jpg">
			<source media="(min-width: 422px)" srcset="../assets/images/volcano3-md.jpg">
			<img class="img-fluid" src="../assets/images/volcano3-sm.jpg" alt="">
		</picture>
	</div>
	<section class="col-xs-12 col-md-6 p-2 bg-translucent" id="volcano">
		<div class="d-flex justify-content-center justify-content-md-start">
			<h2>Visit the Active Volcano</h2>
		</div>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<div class="d-flex justify-content-center justify-content-sm-end">
			<button class="btn cta-btn me-3" onclick="">
				Book a Tour Now
			</button>
		</div>
	</section>
</div>


<?php 
	include('includes/footer.html');
?>