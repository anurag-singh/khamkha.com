<?php

function display_article_list($num){
	for($i=1; $i<=$num; $i++) {
	?>
		<article>
			<header><h2>Article No - <?php echo $i; ?></h2></header>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</article>
	<?php
	}
}


function display_aside_menu($num) {
	echo '<div class="list-group">';
	for($i=1; $i<=$num; $i++){
	?>
		<a class="list-group-item" href="#">Menu - <?php echo $i; ?></a>
	<?php	
	}
	echo '</div>';
?>
	<ul class="nav nav-inline">
		<li class="nav-item">
		<a class="nav-link" href="#">Link</a>
		</li>
		<li class="nav-item">
		<a class="nav-link" href="#">Link</a>
		</li>
		<li class="nav-item">
		<a class="nav-link" href="#">Another link</a>
		</li>
		<li class="nav-item">
		<a class="nav-link disabled" href="#">Disabled</a>
		</li>
	</ul>

<?php
}
?>