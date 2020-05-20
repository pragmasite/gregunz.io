<?php 
  $localroot = dirname(__DIR__);
	include $localroot.'/variables.php';
	$dir = __DIR__;
	$questions = $questions_array[ $dir ];
		
  include $localroot.'/header.php';
  include $localroot.'/content.php'; 
  include $localroot.'/footer.php';
?>