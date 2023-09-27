<?php

function gen_pass($numChars, $List) {
        $passGen ='';
        if($numChars > 4 && $numChars < 16) {
            $passGen = [];
            for ($i = 0; $i < $numChars; $i++){
                
                $numRandom = rand(0,71);
                
                $passGen[] = $List[$numRandom];
                
            }
            $passGen = implode("",$passGen); 
        } 
        return $passGen;
    };
?>