<?php
function format_price( $price ){
    $price = ceil( $price );
    
    if ( $price > 1000 ) {
        $price = number_format( $price, 0, ',', ' ' );
    }
    
    return $price . ' ' . '₽';
}

function data_filter( $text ){
    $text = htmlspecialchars( $text );
    
    return $text;
}