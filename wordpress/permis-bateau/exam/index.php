<?php 
  $localroot = dirname(__DIR__);
	$dir = __DIR__;
	include $localroot.'/variables.php';

  include $localroot.'/header.php';
?>
	<div class="report">
<?php
	echo $titles_array[ $dir ];
	include $localroot.'/chapitre-js.html';
	include $localroot.'/back-buttons.html';
?>
<ul class="report-items">
<?php
	$questions = $questions_array[ $dir ];

	$range_all_questions = range(1, $total_questions, 1);
	shuffle ( $range_all_questions );
	$range = array_slice($range_all_questions, 0, $questions);

	foreach ( $range as $number) {
			include $localroot.'/questions/q'.($number).'.html';
	}
?>
</ul>
</div>
<?php
  include $localroot.'/footer.php';
?>