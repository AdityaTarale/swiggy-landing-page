<!DOCTYPE html>
<html>
<body>

<?php
 
$words = ''
;
 
$wordsArray = explode("\n", $words);
$result = "";
foreach ($wordsArray as $word) $result .= "'$word',";
 
var_dump($result);
?>

</body>
</html>
