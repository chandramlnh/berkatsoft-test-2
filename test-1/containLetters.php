<?php

function containLetters(string $firstWord, string $secondWord): bool {
    $firstWord = strtolower($firstWord);
    $secondWord = strtolower($secondWord);

    for ($i = 0; $i < strlen($firstWord); $i++) {
        $char = $firstWord[$i];

        if (strpos($secondWord, $char) === false) {
            return false;
        }
    }

    return true;
}

echo containLetters('brs', 'berkatsoft'); // output: true
echo "<br>";
echo containLetters('brs', 'berkatco'); // output: false
echo "<br>";
echo containLetters('brs', 'BERKATsoft'); // output: true
echo "<br>";