<?php

function highlightText(string $input) {
    $words = preg_split('/\s+/', $input);
    
    $maxLength = 0;
    foreach ($words as $word) {
        $wordLength = strlen($word);
        if ($wordLength > $maxLength) {
            $maxLength = $wordLength;
        }
    }
    
    $frameWidth = $maxLength + 4; 
    echo str_repeat('#', $frameWidth) . PHP_EOL;
    
    foreach ($words as $word) {
        echo '# ' . str_pad($word, $maxLength) . ' #' . PHP_EOL;
    }
    
    echo str_repeat('#', $frameWidth) . PHP_EOL;
}

highlightText("Has debugado ya?");

?>