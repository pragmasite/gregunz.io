<?php
$startIndex = $startIndex_array[ $dir ];
$questions = $questions_array[ $dir ];

$range = range(1, $questions, 1);
shuffle ( $range );

foreach ( $range as $number) {
    include __DIR__.'/questions/q'.($startIndex + $number).'.html';
}

?>