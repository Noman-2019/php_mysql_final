<?php
$date= "22 june 2024";
$text="Today is first class after Eid";
$web="https://www.google.com";
$output=<<<ABC
<h1>Text: $text</h1>
<p>$date</p>
<a href="$web">google</a>
ABC;
echo $output;
?>
