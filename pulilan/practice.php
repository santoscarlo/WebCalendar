<?php
$string = "where did big elephant go?";
$words = explode('', $string);

$longestwordlength = 0;
$longestword = "";

foreach ($words  as $word) {
	if(strlen($word) > $longestwordlength){
		$longestwordlength = strlen($word);
		$longestword = $word;

	}
}
 echo $longestword;

?>