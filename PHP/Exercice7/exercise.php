<?php

declare(strict_types=1);

function divide($tobedivided, $divider) {
    //$tobedivided{ 13, 45, 88, 78, 30};
    //$divider{45, 55, 66, 78, 65, 4, 78, 23, 12}; - not needed; values already provided
    
    if ($divider == 0){
        throw new RuntimeException('Division by 0 is not allowed');
    }
    return ($tobedivided / $divider);
}


function arrayDivide($valueDi, $divisor) {
    $arry=[];
    foreach ($valueDi as $ger){
        
        try {
            $arry[]=$ger/$divisor;
            
        }catch (RuntimeException $e){
            return $valueDi;
        }
    }
    return $arry;
    
}