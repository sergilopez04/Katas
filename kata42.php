<?php


function highlightText(string $input){
    $previousCounterLetter = 0;
    $datas = preg_split('/\s+/', $input);
    echo implode(PHP_EOL, $datas);
    
    foreach ($datas as $data){
        $counterLetter = strlen($data);
        $previousCounterLetter = ($previousCounterLetter < $counterLetter) ? $previousCounterLetter = $counterLetter: $previousCounterLetter ;
        
        
    }

    highlightText("hola, qué tal?");
}

?>