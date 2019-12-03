<?php
echo "Enter a word: ";
$input = rtrim(fgets(STDIN));
$wordlength = strlen($input);
echo "Your word is {$wordlength} letters long\n";

function checkWord($word) {
$len = strlen($word);
if ($len > 5) {
return strrev(substr($word, 0, 4));
} else {
    return $word;
}
}

$result = checkWord($input);
echo $result;

?>
