<?php

function trim_title_keep_words($title, $max_lenght, $more)  {
    // Title will remain untouched if character counut is smaller than max lenght
    // O título permanecerá intacto se a quantidade de caracteres for menor que o máximo estabeleido.
    if (strlen($title) <= $max_lenght) {
        return $title;
    }
    
    // Title is trimmed and word are kept intact
    // O título é cortado mas a última palavra permanece inteira                               
    $trimmed_title = substr($title, 0, $max_lenght);
    if ( substr($trimmed_title,-1,1) != ' ' ) {
        $trimmed_title = substr($trimmed_title, 0, strrpos($trimmed_title, " "));
    }
    // Adding read more to final                              
    $trimmed_title = $trimmed_title.$more;
    return $trimmed_title;
}                                                                         
