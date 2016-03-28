<div class="container-fluid">
	<div class="row">
		<aside class="col-sm-3 alert-success">
			<br><br>
			<h2>Sidebar</h2>
			<br><br>
			<?php
			display_aside_menu(5);
			?>
		</aside>
		<main class="col-sm-9 alert-info">

		<figure class="card card-inverse">
			<img class="card-img" src="assets/images/hero-unit.jpg" data-src="assets/images/hero-unit.jpg" alt="Card image">
			<figcaption class="card-img-overlay text-xs-center">
				<h4 class="card-title">Card title</h4>
				<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			</figcaption>
		</figure>

			
			<br><br>
			<h2>Archive Heading</h2>
			<br><br>
			<?php
				display_article_list(3);
			?>
		</main>
	</div>
</div>
