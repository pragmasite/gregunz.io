<div class="report">
<?php
	echo $titles_array[ $dir ];
	include __DIR__.'/chapitre-js.html';
	include __DIR__.'/back-buttons.html';
?>
<ul class="report-items">
	<?php 
		include __DIR__.'/questions_loop.php';
	?>
</ul>
</div>