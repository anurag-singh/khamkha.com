<main class="container-fluid">
	<div class="row">
		<aside class="col-sm-3 alert-success">
			<br><br>
			<h2>Sidebar</h2>
			<br><br>
			<?php
			display_aside_menu(5);
			?>
		</aside>
		<section class="col-sm-9 alert-info">
			<figure class="figure">
			  <img src="assets/images/hero-unit.jpg" data-src="assets/images/hero-unit.jpg" class="figure-img img-fluid img-rounded" alt="A generic square placeholder image with rounded corners in a figure.">
			  <figcaption class="figure-caption text-xs-right">A caption for the above image.</figcaption>
			</figure>
			<br><br>
			<h2>Archive Heading</h2>
			<br><br>
			<?php
				display_article_list(3);
			?>
		</section>
	</div>
</main>
