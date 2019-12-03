<?php
echo "Enter a word: ";
$input = rtrim(fgets(STDIN));
$wordlength = strlen($input);
echo "Your word is {$wordlength} letters long";